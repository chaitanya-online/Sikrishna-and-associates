#!/bin/bash
set -e

# Define the container name
CONTAINER_NAME="cabalu-website-container"

# Define image name
IMAGE_NAME="richeb/cabalu-website:v1"

# Check if the container already exists
if docker ps -a --format '{{.Names}}' | grep -q "^$CONTAINER_NAME$"; then
    # If the container exists, stop and remove it
    docker stop "$CONTAINER_NAME"
    docker rm "$CONTAINER_NAME"
fi

# Pull the Docker image from Docker Hub 
docker pull "$IMAGE_NAME"

# Run the Docker image as a container

docker run -p 80:80 --name "$CONTAINER_NAME" -d "$IMAGE_NAME"
