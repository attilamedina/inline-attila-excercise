The applicaton is a very basic PHP app and it's deployed to an Azure App Service because that's serverless what doesn't need so much maintenance on infrastructure,
you pay only for compute power consumption and many stacks are supported.

The SKU for Azure App Service Plan is S1 because that's the minimum SKU to use deployment slots, what is used here to deploy different stages.

The reason why I chose PHP is that its very low weight. But the language can be selected according to the needs and supported stacks. 

The pipelines are in the Pipeline folder:

-solution_1: 
This is the requested solution. You can find here the yaml files for different phases like build, release-staging, manual-validation for staging and release-prod.
CD trigger set to watch Application folder.

-solution_2: 
Here the app is uploaded to an Azure Container Registry in a "containerized version" and it's deployed from there to Azure App Service. 
This is done by "classic" way with Azure DevOps and no CD trigger is set to avoid conflict. Can be started manually. Pipeline: deploy_webapp_inlinemarket_test

-ARM: I made a separate storage account deployment pipeline, the yaml for it is under solution_2 folder. The name is storage_arm_pipeline.yml and
the name of the pipeline: deploy_storageaccount_ARM 

The URLs:

Containerized app:
https://inlinemarket-excercise.azurewebsites.net

Staging:
https://inlinemarket-assesment-test.azurewebsites.net

Prod:
https://inlinemarket-assesment.azurewebsites.net
