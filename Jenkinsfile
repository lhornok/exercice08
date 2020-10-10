pipeline {
    agent any

    stages {
        stage('Prebuild') {
            steps {
                echo 'Pre-Build..'
                sh 'rm -f /tmp/sf-tests-result.xml'
                dir ('prestashop'){
                  sh '/usr/bin/composer phpunit-sf'
                }
                sh 'rm -f /tmp/ps_dump.sql'
                sh 'mv /tmp/sf-tests-result.xml reports/'
                sh 'zip -q -r build/prestashop/files/prestashop.zip prestashop/'
                sh 'mysqldump -u prestashopuser -P 3306 -h 127.0.0.1 -p+QAY2wsx3edc prestashop > docker/dump/dump.sql'
            }
        }
        stage('Build') {
            steps {
                echo 'Build..'
                sh 'ls -l build/prestashop/files'
                sh 'ls -l docker/dump'
                dir ('build'){
                  sh 'packer build prestashop.json'
                } 
                dir ('docker'){
                  sh 'docker-compose up -d'
                }
            }
        }
        stage('Test') {
            input{
                message "Do you want to proceed tests ?"
            }
            steps {
                echo 'Tests..'
                sh './init.sh'
                dir ('tests'){
                  sh '/usr/bin/py.test-3 --junitxml /tmp/results.xml foxtests.py'
                }
                sh 'mv /tmp/results.xml reports/'
            }
        }
    }
    post {
        always {
            dir ('docker'){
              sh 'docker-compose down --rmi all'
            }
            junit 'reports/*.xml'
        }
    }
}
