<p align="center"><img src="https://i.ibb.co/TqcPXZL/White-Chamomile-Transparent-PNG.png" width="120"></p>

# <p align="center">chamomile</p>
<p align="center">An application for creating services with an HTTP interface.</p><br><br><br>

## Installing chamomile:
- Clone the repository to your local machine

  ```bash
  git clone https://github.com/kikemaru/chamomile.git
  ```
- Go to the repository directory and run the bash file to configure the server availability settings for nginx
  
  ```bash
  cd chamomile && bash setting.sh allowed_IP_address your_host
  ```
- After configuring the settings, run docker-compose to build the Docker container:

   ```bash
   docker compose up -d
   ```

## This application is in the development stage!

setting.sh
