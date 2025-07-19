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
