# Carzino Plugin Repository

This repository contains the **Carzino WordPress Plugin**, which integrates a React frontend app into WordPress via a shortcode.  
All builds are automated using **GitHub Actions** — no local building required. Hello

---

## 📂 Structure
- **/carzino-plugin/** → WordPress plugin core (PHP + enqueue logic).  
- **/frontend/** → React source code.  
- **/build/** → Compiled React build artifacts (created automatically).  
- **/.github/workflows/** → GitHub Actions automation (`build.yml`).  

---

## ⚙️ Features
- Automated builds on every push to `main`.  
- Shortcode support to embed the React app anywhere (`[carzino_app]`).  
- No local build required — GitHub Actions handles everything.  

---

## 🚀 Usage
1. Install this plugin in WordPress.  
2. Use the shortcode `[carzino_app]` inside a post or page.  
3. The React app will load from the `/build/` directory.  

---

## 🔧 Development
If you’re contributing:  
- React source is inside `/frontend`.  
- PHP plugin logic is inside `/includes` and `carzino-plugin.php`.  
- CI/CD workflow is configured in `.github/workflows/build.yml`.  

> ⚠️ Note: You do **not** need to run `npm build` locally. GitHub Actions builds automatically and commits to `/build/`.  
