# Base image
FROM node:18-alpine

# Set working directory
WORKDIR /client

# Copy package.json and package-lock.json
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy the rest of the application files
COPY . .

# Build the application
RUN apk update && apk add bash
RUN npm run build

# Start the application
CMD ["npm", "start"]
