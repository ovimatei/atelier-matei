# A WordPress Theme for building website for a small business

## Requirements

- Docker 17.06 or greater
- Docker Compose (should come with Docker)

## Install and Run with Docker

### Install requirements

Install Docker Desktop:
- macOS: https://docs.docker.com/docker-for-mac/install/
- Windows: https://docs.docker.com/docker-for-windows/install/

### Installing, building, and serving the site via Docker

1. Copy the `.env.development.sample` as `.env`
2. Edit the `.env` file and customize the variables. The defaults should run fine.
3. Run Docker Compose in the terminal. Make sure you're in the root folder:
    - `docker-compose up`
4. Install WordPress accessing the site url in your browser. 