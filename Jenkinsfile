pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo 'Pre-Build..'
                sh '/usr/bin/composer -h'
                dir ('prestashop'){
                  sh '/usr/bin/composer phpunit-sf'
                }
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
