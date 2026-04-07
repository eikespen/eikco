# Deployment

Deploys are handled by GitHub Actions — see `.github/workflows/deploy.yml`.

## One-time setup (do this once)

### 1. Create the `production` environment in GitHub

This is the safety rail that makes every deploy wait for your manual approval.

1. Go to https://github.com/eikespen/eikco/settings/environments
2. Click **New environment**
3. Name it exactly `production` (lowercase)
4. Under **Deployment protection rules**, enable **Required reviewers**
5. Add yourself (`eikespen`) as a reviewer
6. Click **Save protection rules**

Result: every deploy pauses and waits for you to click "Review deployments → Approve".

### 2. Add SiteGround SFTP credentials as GitHub Secrets

**IMPORTANT**: In SiteGround Site Tools, create a **dedicated SFTP user** for deployments — do NOT use the root `admin@...` account. Scope the user to the WordPress install directory if possible.

1. In SiteGround Site Tools, go to **Security → SFTP/FTP Accounts** → **Create Account**
   - Username: `deploy-github` (or similar)
   - Strong unique password (generate one, don't reuse)
   - Directory: the WordPress root (typically `/home/customer/www/eik.es/public_html`)
   - **Protocol: SFTP on port 22** — not FTP

2. In GitHub, go to https://github.com/eikespen/eikco/settings/secrets/actions
3. Click **New repository secret** and add each of these:

   | Name | Value |
   | --- | --- |
   | `SFTP_HOST` | `ftp.espent22.sg-host.com` (or whatever SiteGround shows for the SFTP host) |
   | `SFTP_USERNAME` | The dedicated SFTP username you just created |
   | `SFTP_PASSWORD` | That user's password |
   | `SFTP_REMOTE_PATH` | `/home/customer/www/eik.es/public_html/wp-content/themes/eikco/` (confirm the exact path in SiteGround — the prefix may differ) |

That's it. These secrets are encrypted by GitHub and never visible again after you save them, not even to you — only the Action runner can read them.

### 3. (Optional but strongly recommended) Create a staging site

1. SiteGround Site Tools → **Dev → Staging** → **Create Staging Copy**
2. Once created, you can add a second GitHub environment called `staging` with its own secrets and deploy there first.

## How to deploy

### Automatic (push to main)

1. Make changes locally
2. Commit and push to `main`
3. GitHub Actions queues a deploy
4. You get a notification/email — click "Review deployments" → **Approve**
5. Deploy runs

### Manual (from the GitHub UI)

1. Go to https://github.com/eikespen/eikco/actions
2. Click **Deploy theme to SiteGround** in the left sidebar
3. Click **Run workflow**
4. (Optional) Tick **Dry run** to preview what would be uploaded without actually uploading
5. Click **Run workflow**, then approve when prompted

## How to roll back

Because deploys are Git-based, a rollback is just deploying an earlier commit:

```bash
# Option A: revert the bad commit and push
git revert HEAD
git push

# Option B: manually dispatch a workflow run from an older tag/branch
# (in the GitHub UI, under Actions → Run workflow → pick a branch/ref)
```

The deploy workflow does **not** delete files on the server that don't exist locally (`dangerous-clean-slate: false`), so orphaned files from an earlier deploy stay in place. If you ever need a clean slate, do it manually in SiteGround.

## Security notes

- **Credentials never appear in chat, in the repo, or in the workflow file.** They only live in GitHub Secrets and SiteGround itself.
- **Use a dedicated SFTP user** for deployments, not the root admin account.
- **SFTP on port 22 only** — plain FTP on port 21 sends passwords in cleartext.
- **Rotate the deploy user's password** periodically and immediately if compromised.
- **Never commit** the `.wp-env.override.json` file (already in `.gitignore`) — that's for local-only config overrides.
