# Carzino Plugin Repository

This repository contains IS the **Carzino WordPress Plugin** and all related configuration for GitHub Actions builds and deployment.

## Structure

- **carzino-plugin/** → The actual WordPress plugin code.
- **build/** → Compiled React build artifacts go here (via GitHub Actions).
- **.github/workflows/** → CI/CD automation (build.yml).

## GitHub Actions

The workflow in `.github/workflows/build.yml` automatically:
1. Installs dependencies in `carzino-plugin/frontend`
2. Builds the React app
3. Copies the output to `carzino-plugin/build`
4. Commits the updated build files

## How to Use

Since this repo is automated with GitHub Actions, you don’t need to run anything locally.

- Push to `main` → triggers build.yml → React app is built and committed to `/build`.
- WordPress will use the files from `carzino-plugin`.

---
