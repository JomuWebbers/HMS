# OsunBiz — Low-Fidelity Wireframes (Design Preview)

> **Design preview only.** These are static HTML/CSS wireframes for evaluating layout
> before any application is built. No React/JS/backend code lives here. Nothing in this
> folder is part of the actual application.

**Project:** Design and Implementation of a Web-Based Marketing Directory System (Osun State as a Case Study)
**Provisional brand:** OsunBiz
**Fidelity:** Low-fi — grayscale, placeholder boxes, neutral borders, no branding/colors/animations.

## How to view

1. Open `index.html` in your browser (double-click, or drag into Chrome/Edge).
2. The **preview hub** shows all four pages side by side at both viewports:
   - **Mobile — 390 px** (iPhone-ish width, scroll inside the frame)
   - **Desktop — 1440 px** (shown scaled at 50%; scroll inside the frame)
3. Each block also links **"Open full page"** so you can view a wireframe by itself
   (resize your browser window to ~390 px and ~1440 px to see each layout, or use
   DevTools device toolbar).

## Files

| File | Page | Contents |
|---|---|---|
| `index.html` | Preview hub | All 4 pages embedded at both viewports |
| `homepage.html` | A. Homepage | Header/nav, hero + search (keyword/location/category), category grid, featured cards, popular locations (Osogbo, Ile-Ife, Ilesa, Ede, Iwo), owner CTA, footer |
| `directory.html` | B. Business Directory | Search fields, category/town/sort filters, results count, listing cards, pagination, empty-results state (labeled alternate state) |
| `details.html` | C. Business Details | Name/logo, cover placeholder, category/location, description + services, contact, opening hours, map placeholder, Call/WhatsApp buttons, similar businesses |
| `dashboard.html` | D. Administrator Dashboard | Sidebar nav, summary stats (pending/approved counts), recent submissions table with Approve/Reject/Edit/Suspend placeholders, category & business management nav, mobile layout |
| `styles.css` | — | Shared grayscale wireframe styles |

## Viewports covered

- **Mobile ≈ 390 px** — stacked nav (hamburger), 1-column search, wrapped cards, dashboard stats in 2 columns, admin table collapses to stacked rows with field labels.
- **Desktop ≈ 1440 px** — horizontal nav, inline search bar, 3-column card grids, dashboard sidebar + 4-column stats, full data table.

## Rules this folder follows

- Static HTML + one CSS file only. No JS, no build step, no packages, no dependencies.
- Isolated: no existing project files were modified.
- Grayscale only; brand colors, logos, images and animations are intentionally omitted.
