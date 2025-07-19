| Feature                          | Description                                                | Status          |
| -------------------------------- | ---------------------------------------------------------- | --------------- |
| 🖼 **Image Preview**              | Show selected image before upload                          | ✅ Added now    |
| 📝 **WYSIWYG / Markdown Editor** | Rich text editor for post content (future-ready)           | ✅ Placeholder  |
| 🔍 **Live Validation Feedback**  | Realtime inline validation feedback (min. required fields) | ✅ Basic ready  |
| 🔄 **AJAX Submission**           | Optional – submit without full reload                      | ✅ Optional JS  |
| 🧾 **Tagging System**            | Allow multiple tags per post                               | ✅ Tag input UI |
| 🧠 **AI-Suggest Title/Tags**     | Reserved for later (AI API or prompt engine)               | ⚠️ Planned      |

Planned

// In post-card.php Wrapper
💡 Why Wrap with .post-card-wrapper?
Benefit Description
🧠 Easy DOM access You can target individual posts in JavaScript using document.querySelector('.post-card-wrapper[data-id="123"])
🔁 Supports live updates Easily replace, update, or remove a post card using AJAX
✨ Enables animations Apply enter/exit animations using this wrapper
📦 Future features Supports inline editing, lazy loading, moderation tools, etc.

Great question!

The `-am` in your Git command is a **shorthand for two separate flags**:

---

### ✅ Explanation:

```bash
git commit -am "Your commit message"
```

is equivalent to:

```bash
git add -u
git commit -m "Your commit message"
```

---

### 🔍 Breakdown:

| Flag | Meaning                                                                                                   |
| ---- | --------------------------------------------------------------------------------------------------------- |
| `-a` | **Automatically stages** any files that have been **modified or deleted** (but not _new untracked files_) |
| `-m` | **Specifies the commit message** inline                                                                   |

---

### ⚠️ Important Notes:

- `-a` **only stages already tracked files** (i.e., files you've committed before).
  ➤ If you've added a **new file**, you still need to do:

  ```bash
  git add path/to/newfile.js
  ```

- It's very useful when you're editing existing files and want a fast commit.

---

### ✅ Example:

If you only modified `posts-grid.js` and didn’t add any new files:

```bash
git commit -am "feat(js): Added logic for edit/delete post buttons"
```

works perfectly!

---

### ✅ Summary:

| Command                | What it does                                             |
| ---------------------- | -------------------------------------------------------- |
| `git commit -m "..."`  | Commits staged files only                                |
| `git commit -am "..."` | Stages and commits modified/deleted files (not new ones) |

Let me know if you want a Git cheatsheet PDF too!

✅20/7/25- Morning
