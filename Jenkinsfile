pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo 'Pre-Build..'
                sh 'pwd'
                sh 'ls -l'
                sh 'cd prestashop ; composer phpunit-sf'
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
