# Use the official Nginx image as a base image
FROM nginx:alpine

# Set the working directory to /usr/share/nginx/html/
WORKDIR /usr/share/nginx/html/

# Copy the contents of the html directory into the container
COPY . .

# Expose port 80 to allow external access
EXPOSE 8080

# Command to start Nginx in the foreground
CMD ["nginx", "-g", "daemon off;"]
