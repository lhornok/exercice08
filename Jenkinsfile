pipeline {
    agent any

    stages {
        stage('Prebuild') {
            steps {
                echo 'Pre-Build..'
                dir ('prestashop'){
                  sh '/usr/bin/composer phpunit-sf'
                }
                sh 'rm /tmp/ps_dump.sql'
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
            steps {
                echo 'Tests..'
                dir ('tests'){
                  sh 'python3 foxtests.py'
                }
                dir ('docker'){
                  sh 'docker-compose down --rmi all'
                }
            }
        }
    }
}
