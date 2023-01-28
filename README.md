# SARIF formatter for PHPStan

## PHPStan

PHPStan focuses on finding errors in your code without actually running it. It catches whole classes of bugs even before you write tests for the code. It moves PHP closer to compiled languages in the sense that the correctness of each line of the code can be checked before you run the actual line.

<https://phpstan.org/>

## Static Analysis Results Interchange Format (SARIF)

SARIF, the Static Analysis Results Interchange Format, is a standard, JSON-based format for the output of static analysis tool.  
It has been [approved](https://www.oasis-open.org/news/announcements/static-analysis-results-interchange-format-sarif-v2-1-0-is-approved-as-an-oasis-s) as an [OASIS](https://www.oasis-open.org/) standard.

SARIF is a rich format intended to meet the needs of sophisticated tools, while still being practical for use by simpler tools.
Because it would be impractical to support every feature of every tool, SARIF provides an extensibility mechanism to allow tool authors to store custom data that the SARIF format doesn't directly represent.

<https://docs.oasis-open.org/sarif/sarif/v2.0/sarif-v2.0.html>

## Usage

```cmd
composer require --dev phpstan/phpstan jbelien/phpstan-sarif-formatter
```

Then update your `phpstan.neon` configuration file:

```yaml
services:
    errorFormatter.sarif:
        class: PHPStanSarifErrorFormatter\SarifErrorFormatter
        arguments:
            relativePathHelper: @simpleRelativePathHelper
            currentWorkingDirectory: %currentWorkingDirectory%
            pretty: true
```
