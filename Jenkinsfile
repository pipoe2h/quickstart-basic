timestamps {

    node() {
        stage ('Launch Calm Blueprint') {
            step([$class                             : 'BlueprintLaunch',
                          appProfileName             : 'Azure', 
                          applicationName            : 'Azure_${JOB_BASE_NAME}_${BUILD_ID}', 
                          blueprintDescription       : 'Description is empty', 
                          blueprintName              : 'php-task-manager-azure', 
                          projectName                : 'ilp', 
                          runtimeVariables           : '{}', 
                          waitForSuccessFulLaunch    : true])
        }
    }

}