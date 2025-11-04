# syntax=docker/dockerfile:1.6

# Build stage - uses Hugo extended to compile the site into static assets
FROM klakegg/hugo:0.134.2-ext-alpine AS builder
WORKDIR /src

# Copy the repository and build the production site
COPY . .
RUN hugo --minify --gc

# Runtime stage - serve the generated static site through nginx
FROM nginx:1.27-alpine
COPY --from=builder /src/public /usr/share/nginx/html

# Harden the container a bit
EXPOSE 80
HEALTHCHECK --interval=30s --timeout=5s --start-period=10s --retries=3 \
  CMD wget -q -O /dev/null http://127.0.0.1/ || exit 1

CMD ["nginx", "-g", "daemon off;"]
