# 📝 Commiting via Message File in Git (`commit-message.txt`)

This guide documents how to write, reuse, and commit with a multi-line Git commit message using a text file — specifically `commit-message.txt`.

---

## ✅ Scenario

You tried to run a multi-line `git commit` like this:

```bash
git commit -m "feat: Build advanced comment section...

- Line 1
- Line 2
..."
```

But it failed with errors like:
```
syntax error near unexpected token `newline'
error: pathspec ...
```

Because:
- `git commit -m` **only supports single-line messages**, unless you escape or wrap newlines manually.
- Special characters like `:`, `-`, `"` or emoji may break the bash interpreter.
---

## ✅ Best Solution — Use a File to Commit

### 1. Create your message file using nano:
```bash
nano commit-message.txt
```

### 2. Paste your commit message:
```text
feat: Build advanced, interactive, scalable comment section with modern UI and backend readiness

💬 Designed a fully featured comment system:
- Responsive 2-row × 4-column comment layout with Tailwind Grid
- Backend integration-ready comment submission form
- Animated transitions and hover effects for a modern UX

🛠 Enhanced comment actions with advanced interactivity:
- Like 👍 / Dislike 👎 buttons with counters
- Emoji selector placeholder (future plugin integration possible)
- Reply 💬 and Pin 📌 actions on each comment card
- Built using Font Awesome v6 icons

🎛 Added advanced filtering and sorting toolbar:
- Multi-select filter options (Recent, Most Liked, Most Replied, etc.)
- Future-ready dropdown selector for comment category or tag
- Integrated search bar for filtering comments by content or keyword

🔄 Planned dynamic loading and routing:
- Added "Load More" or "Go to Comments Page" CTA at the bottom
- Future support for AJAX-based loading or full-page redirection

📁 Placement & Structure:
- Component stored in `components/comments-section.php`
- Clean modular structure, reusable across `post.php`, `home.php`, or standalone

✅ Result:
- Scalable and animated comment UI
- Fully prepared for backend logic
- Industry-level structure, responsive design, and interactive elements
```

### 3. Save the file:
- Press `Ctrl + O` → hit `Enter`
- Press `Ctrl + X` to exit

---

### 4. Commit using the file:
```bash
git commit -F commit-message.txt
```

---

## 📂 Where is `commit-message.txt` stored?

- It is saved in the **current folder** where you ran `nano`.
- Use `ls` to check:
```bash
ls commit-message.txt
```
- Or search for it:
```bash
find . -name "commit-message.txt"
```

---

## 🔁 Can I reuse it?

✅ Yes — Git does not delete or change the file. You can reuse it every time:

```bash
git commit -F commit-message.txt
```

Or edit it each time:
```bash
nano commit-message.txt
```

---

## 📁 Optional: Organize Your Messages

You can create a folder to manage multiple reusable messages:

```bash
mkdir .git-messages
mv commit-message.txt .git-messages/comment-commit.txt
```

Then use:
```bash
git commit -F .git-messages/comment-commit.txt
```

---

## 📘 Summary

| Task | Command |
|------|---------|
| Create message file | `nano commit-message.txt` |
| Commit with file | `git commit -F commit-message.txt` |
| Edit file again | `nano commit-message.txt` |
| Move to custom folder | `mv commit-message.txt .git-messages/` |
| Reuse for future commits | `git commit -F .git-messages/comment-commit.txt` |

---

🕒 **Created on:** July 14, 2025

