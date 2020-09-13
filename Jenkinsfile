pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo 'Pre-Build..'
                dir ('prestashop'){
                  sh '/usr/bin/composer phpunit-sf'
                }
                sh 'rm /tmp/ps_dump.sql'
            }
        }
        stage('Test') {
            steps {
                echo 'Build..'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Functionnal test..'
            }
        }
    }
}
