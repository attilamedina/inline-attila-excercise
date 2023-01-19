<?php
    require_once 'vendor/autoload.php';
    $app_insights_instrumentation = getenv('APPINSIGHTS_INSTRUMENTATIONKEY');
    $telemetryClient = new \ApplicationInsights\Telemetry_Client();
    $telemetryClient->getContext()->setInstrumentationKey($app_insights_instrumentation);
    $telemetryClient->trackRequest('Server Requests','Azure DevOps Project', time());
    $telemetryClient->flush();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>PHP Application</title>
	<link href="css/site.css" rel="stylesheet">
</head>

<body>
<div class="main-container">
        <div class="cloud-image">
            <img src="img/successCloudNew.svg" alt="successCloudNew" />
        </div>
        <div class="content">
            <div class="tweet-container">
            <a href="http://twitter.com/intent/tweet/?text=I%20just%20created%20a%20new%20PHP%20website%20on%20Azure%20using%20Azure%20DevOps%20Project&hashtags=AzureDevOpsProject%2CVSTS%20%40Azure%20%40VSTS">
                <img src="img/tweetThis.svg" alt="tweetThis" />
            </a>
        </div>
            <div class="content-body">
                <div class="success-text">Success!</div>
                <div class="description line-1">
				<?php
				echo "Attila Medina pipeline .test excercise";
				?>
				</div>
                <div class="description line-2">
				<?php
				$appType = "PHP";
				echo "Your $appType app is up and running on Azure";
				echo "Test"
				?>
				</div>
                <div class="next-steps-container">
                    <div class="next-steps-header">Next up</div>
                    <div class="next-steps-body">
                        <div class="step">
                            <div class="step-icon">
                                <img src="img/cloneWhite.svg" alt="cloneWhite" />
                            </div>
                            <div class="step-text"><a href="https://go.microsoft.com/fwlink/?linkid=862409">Clone your code repository and start developing your application on IDE of your choice</a></div>
                        </div>
                        <div class="step">
                            <div class="step-icon">
                                <img src="img/deployWhite.svg" alt="deployWhite" />
                            </div>
                            <div class="step-text"><a href="https://go.microsoft.com/fwlink/?linkid=862410">View your CI/CD pipeline on Azure Devops and customize it as per your needs</a></div>
                        </div>
                        <div class="step">
                            <div class="step-icon">
                                <img src="img/stackWhite.svg" alt="stackWhite" />
                            </div>
                            <div class="step-text"><a href="http://portal.azure.com">View your service stack in the Azure Portal</a></div>
                        </div>
                        <div class="step">
                            <div class="step-icon">
                                <img src="img/lightbulbWhite.svg" alt="lightbulbWhite" />
                            </div>
                            <div class="step-text"><a href="https://go.microsoft.com/fwlink/?linkid=862126">Learn more about all you can do with Azure projects by visiting the documentation</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
