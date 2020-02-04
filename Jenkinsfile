timestamps {

    node() {
        stage ('Launch Calm Blueprint') {
            step([$class                             : 'BlueprintLaunch',
                          appProfileName             : 'Default', 
                          applicationName            : 'Azure_${JOB_BASE_NAME}_${BUILD_ID}', 
                          blueprintDescription       : 'Description is empty', 
                          blueprintName              : 'php-task-manager-azure', 
                          projectName                : 'Azure', 
                          runtimeVariables           : '{}', 
                          waitForSuccessFulLaunch    : true])
        }
    }

}