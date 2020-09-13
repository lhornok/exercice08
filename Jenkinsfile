pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo 'Pre-Build..'
                sh 'pwd'
                sh 'ls -l'
                sh 'cd prestashop'
                sh 'pwd'
                sh 'php vendor/bin/phpunit tests'
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
