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
                sh 'zip -r build/prestashop/files/prestashop.zip prestashop/'
                sh 'ls -l build/pestashop/files'
            }
        }
        stage('Build') {
            steps {
                echo 'Build..'
            }
        }
        stage('Test') {
            steps {
                echo 'Test..'
            }
        }
    }
}
