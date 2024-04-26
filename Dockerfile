# Use the official Apache HTTP Server image as a base image
FROM httpd:latest

# Copy your HTML files into the container
COPY . /usr/local/apache2/htdocs/

# Expose port 80 to allow external access
EXPOSE 80
