#!/bin/bash
set -e



# Define the container name
CONTAINER_NAME="cabalu-website-container"

# Define image name
IMAGE_NAME="richeb/cabalu-website:v1"


# 1 git pull
echo " Started pulling from SCM "

git pull

echo "Pulled Sucessfully"

# 2 docker build

docker build --no-cache -t "$IMAGE_NAME" .


# 3 Pushing image to docker hub
docker push  "$IMAGE_NAME"

echo "image pushed to docker hub"


# 4 Check if the container already exists
if docker ps -a --format '{{.Names}}' | grep -q "^$CONTAINER_NAME$"; then
    # If the container exists, stop and remove it
    docker stop "$CONTAINER_NAME"
    docker rm "$CONTAINER_NAME"
fi

#5  Pull the Docker image from Docker Hub 
docker pull "$IMAGE_NAME"

#6 Run the Docker image as a container

docker run -p 80:80 --name "$CONTAINER_NAME" -d "$IMAGE_NAME"

echo "container is up and running"



#7 deleting unused docker images

echo "y" | docker system prune

echo "Deleted old data"

