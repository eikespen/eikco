# Eik & Co — eik.es

WordPress block theme and local development environment for **eik.es**, the website for Eik & Co — an independent buyer's agent helping foreign buyers purchase property in Ciudad Quesada, Spain.

## What's in this repo

```
.
├── .wp-env.json          # Local WordPress environment config
├── package.json          # Scripts to start/stop the local site
├── themes/
│   └── eikco/            # The custom block theme (FSE)
│       ├── style.css
│       ├── theme.json    # Design tokens (colors, type, spacing)
│       ├── functions.php
│       ├── templates/    # Block templates
│       ├── parts/        # Header and footer template parts
│       └── patterns/     # Reusable block patterns
└── README.md
```

## Requirements

- [Node.js](https://nodejs.org/) 18 or newer
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) (for `wp-env`)

## Getting started

```bash
# 1. Install dependencies
npm install

# 2. Start WordPress (first run takes a few minutes)
npm start

# 3. Open the site
#    Frontend: http://localhost:8888
#    Admin:    http://localhost:8888/wp-admin
#    user: admin   pass: password
```

Then in the admin:
1. **Appearance → Themes** → activate "Eik & Co"
2. **Settings → Reading** → set "Your homepage displays" to a **static page** (create a blank page called "Home" first), or leave it on "Latest posts" and the `front-page.html` template will be used automatically
3. **Appearance → Editor** → tweak templates, patterns, and styles visually

## Useful commands

| Command | What it does |
| --- | --- |
| `npm start` | Start the local WordPress container |
| `npm stop` | Stop it |
| `npm run logs` | Tail container logs |
| `npm run cli -- plugin list` | Run any WP-CLI command inside the container |
| `npm run clean` | Reset the database to a fresh install |
| `npm run destroy` | Nuke the entire environment (careful) |

## Design system

All design tokens live in `themes/eikco/theme.json`:

- **Colors**: Eik Green (primary), Terracotta (accent), Sand (muted), warm base
- **Type**: Playfair Display (serif headings) + Inter (sans body)
- **Spacing**: fluid `clamp()` scale from XS to XXL
- **Buttons**: pill-shaped, green by default

Change them in `theme.json` and they propagate across every template, pattern, and the editor.

## Deployment (TBD)

The live site is hosted on SiteGround. Deployment workflow is not yet set up — the plan is to:

1. Develop locally with `wp-env`
2. Push to a **SiteGround staging site** for review
3. Promote staging → production only after review

**Never deploy untested changes directly to production.** Credentials are not stored in this repo.

## License

Proprietary. All rights reserved © Homerun Marketing S.L. (B56734270).
