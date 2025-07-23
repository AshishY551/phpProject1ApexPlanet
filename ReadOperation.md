📘 ReadOperation.md

✅ Title: Dynamic Post Fetching via Read Operation (PHP + JS + MySQL)

🗂 Module: /modules/posts/read.php

📅 Date: 2025-07-23

🔧 Purpose

To dynamically load blog posts from the database using a secure, scalable, and performant method that replaces static HTML post rendering with AJAX-based content loading.

📍 Technologies Used

PHP (PDO for database access)

JavaScript (ES6 Fetch API)

MySQL (with phpMyAdmin)

Tailwind CSS (for responsive UI)

JSON (structured API response)

⚙️ Backend: read.php

Features:

Retrieves posts from the DB using secure prepared statements

Supports filters (category, status), search, sorting (newest/oldest/popular)

Uses LEFT JOIN to link posts to users table (for author info)

Applies pagination with limit and offset

Returned JSON Structure:

{
"success": true,
"count": 6,
"posts": [
{
"id": 1,
"title": "...",
"excerpt": "...",
"image": "...",
"author": "...",
"formatted_date": "...",
"short_desc": "..."
}
]
}

Sample SQL Query:

SELECT posts.id, posts.title, posts.slug, posts.excerpt, posts.image, posts.created_at,
posts.likes, posts.views, posts.category, users.username AS author
FROM posts
LEFT JOIN users ON posts.user_id = users.id
WHERE posts.status = 'published'
ORDER BY posts.created_at DESC
LIMIT :limit OFFSET :offset

🛠️ Frontend: posts-loader.js

Features:

Uses Fetch API to load posts on page load and on button click

Calls /modules/posts/read.php?limit=6&offset=0

Builds post UI cards using renderPostCard(post)

Applies animations and styling via Tailwind

Key Functions:

fetchPosts() — handles AJAX, filters, pagination

renderPostCard(post) — generates post HTML

escapeHTML(str) — protects against XSS

🧱 Database Updates

Column Name

Type

Description

excerpt

VARCHAR(255)

Preview snippet shown in post card

likes

INT

Post popularity (future use)

views

INT

View count (future use)

category

VARCHAR(100)

Post classification/tag

🐞 Errors & Fixes

Issue

Fix

Unknown column description

Removed from SQL, switched to excerpt

Missing column status, category, tags, likes

Added manually in phpMyAdmin

Posts not loading in UI

Updated renderPostCard() and ensured JSON parsed correctly

🧩 Future Enhancements

Add infinite scroll with IntersectionObserver

Add filter UI (categories, tags, status)

AJAX-based edit/delete functionality

Slug-based SEO-friendly URLs

✅ Summary

Dynamic post loading now live

Fully responsive and interactive

Follows modern standards (AJAX, modularity, security)

Ready for scaling, backend expansion, and API usage
