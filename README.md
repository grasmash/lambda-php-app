# Example PHP App for Lambda

This application uses the [Bref plugin](https://bref.sh/) for [Serverless](https://www.serverless.com/) to deploy a simple PHP 
application to [AWS Lambda](https://docs.aws.amazon.com/lambda/latest/dg/welcome.html). The application can be reached through a [Function URL](https://docs.aws.amazon.com/lambda/latest/dg/lambda-urls.html).

# Getting started
Just clone this repository and install its dependencies.
```shell
git clone [url]
composer install
```

# Deploying to AWS Lambda

Ensure you have the serverless library installed locally:
```bash
npm install -g serverless
```

And that you've configured serverless with your AWS credentials:
```bash
serverless config credentials --provider aws --key <key> --secret <secret>
```

Then, deploy!
```bash
serverless deploy
```
