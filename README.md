# About

Project based on cakephp/app template with support to running on Docker containers. Templates are built by `bake` commands.

## Steps

After project downloaded
```bash
docker-compose up -d
```

Inside container
1. Install dependencies by run command `composer install`
2. Create `.env` file from `.env.example` in /config directory
3. In `.env` file, configure email provider (`EMAIL_TRANSPORT_DEFAULT_URL`)
4. In `.env` file, configure email address to receive messages (`EMAIL`)
5. Build database tables using migrations by run command `bin/cake migrations migrate`
6. Check on http://localhost is everything is okay, like connection to database
7. Open and test on http://localhost/messages
