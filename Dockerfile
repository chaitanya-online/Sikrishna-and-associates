# Use the official Nginx image as a base image
FROM nginx:alpine

# Set the working directory to /usr/share/nginx/html/
WORKDIR /usr/share/nginx/html/

# Copy the contents of the html directory into the container
# COPY . .
COPY Sikrishna-and-associates/caportal.saginfotech.com/caportal/ca-template-70/index.html .


# Expose port 80 to allow external access
EXPOSE 80

# Command to start Nginx in the foreground
CMD ["nginx", "-g", "daemon off;"]
