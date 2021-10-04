
$PSVersion = $PSVersionTable.PSVersion
$xml = ""

$xml += "<POWERSHELLVERSION>`n"
$xml += "<VERSION>" + $PSVersion.Major + "." + $PSVersion.Minor + "." + $PSVersion.Build + "." + $PSVersion.Revision + "</VERSION>`n"
$xml += "<MAJOR>" + $PSVersion.Major + "</MAJOR>`n"
$xml += "<MINOR>" + $PSVersion.Minor + "</MINOR>`n"
$xml += "<BUILD>" + $PSVersion.Build + "</BUILD>`n"
$xml += "<REVISION>" + $PSVersion.Revision + "</REVISION>`n"
$xml += "</POWERSHELLVERSION>`n"

[Console]::OutputEncoding = [System.Text.Encoding]::UTF8
[Console]::WriteLine($xml)