# DevOps Practice Project: Migrating a PHP Website to AWS Cloud

## Overview
This project demonstrates my **DevOps skills** by migrating an existing PHP website with a MySQL database to the AWS cloud. The challenge included setting up cloud infrastructure, deploying the application, implementing CD pipeline, and connecting monitoring.
## [LINK TO THE WEBSITE](http://ec2-63-35-10-112.eu-west-1.compute.amazonaws.com/)

## Objectives
- **Migrate** a PHP website with a database to AWS.
- Design and configure **cloud infrastructure** using best practices.
- Implement an **auto-deployment pipeline** for efficient updates.
- Monitor the application and infrastructure health.

## Tools and Technologies Used
- **AWS Services**:
  - **VPC**: To create an isolated network environment.
  - **EC2**: To host the PHP application.
  - **RDS**: To manage the MySQL database in a secure and scalable manner.
- **Linux**: For server configuration and management.
- **Nginx**: As the web server for hosting the PHP site.
- **Git and GitHub**: For version control and source code management.
- **Azure DevOps Pipeline**: To automate the deployment process.
- **Prometheus & Grafana**: For application monitoring.

## Implementation Steps

### 1. Local Project Setup
- Utilized an old PHP project as the base application.
- Confirmed functionality in a local environment.

### 2. Infrastructure Setup on AWS
- Created a **VPC** with public and private subnets to ensure secure communication between services.
![image](https://github.com/user-attachments/assets/a08e6652-2cc9-4dea-97ac-24756b51cad5)
- Launched an **EC2** instance in the public subnet for the application server.
![image](https://github.com/user-attachments/assets/65dad7c5-db8b-49db-abbe-959b75fb7467)
- Configured **RDS** to host the MySQL database with private subnet access.
![image](https://github.com/user-attachments/assets/a71c0593-a633-4d64-8b1c-fb9e2ded3bbc)
![image](https://github.com/user-attachments/assets/892e292f-0418-454f-bb05-5abe5e07a342) 






### 3. Server Configuration
- Installed and configured **Nginx** on the EC2 instance to serve the PHP application.
- Connected the application to the MySQL database hosted on RDS.
![image](https://github.com/user-attachments/assets/3e549281-4edc-4c0c-894c-cd8c51ae1b8c)


### 4. Version Control
- Uploaded the project to a **GitHub** repository to track changes and facilitate deployment.

### 5. Automated Deployment
- Set up a **CI/CD pipeline** using **Azure DevOps**:
  - Configured the pipeline to pull the latest code from GitHub.
  - Automated deployment of the updated application to the EC2 instance.
  - Create an .env file to pass the secret values needed to connect to the database.
![image](https://github.com/user-attachments/assets/8392ce87-fa9f-4781-bbae-ef8bdc7453db)



### 6. Monitoring and Logging
- Integrated **Prometheus** to collect application and server metrics.
![image](https://github.com/user-attachments/assets/0d81512e-f76c-42ef-95b3-0411cf8f8b97)
- Set up **Grafana** dashboards for real-time monitoring and visualization.
- ![image](https://github.com/user-attachments/assets/8542676f-80c3-47da-8f8a-58db94d7939c)


## Results
- Successfully migrated the PHP website to AWS cloud infrastructure.
- Achieved automated deployments via Azure DevOps, improving efficiency and reliability.
- Implemented robust monitoring for proactive issue identification.

## Future Enhancements
- Implementing **auto-scaling** for the EC2 instance.
- Adding a **CDN** for faster content delivery.
- Setting up **automated backups** for the RDS database.
