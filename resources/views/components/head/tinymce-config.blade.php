<script src="https://cdn.tiny.cloud/1/add-your-api-key-here/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#editor',
        plugins: 'advcode advtemplate a11ychecker autocorrect autolink emoticons image inlinecss link linkchecker lists mergetags powerpaste tinymcespellchecker help',
        toolbar: 'undo redo | aidialog aishortcuts | styles | bold italic forecolor | link image emoticons | align | mergetags inserttemplate | spellcheckdialog a11ycheck | code removeformat',
        toolbar_sticky: true,
        menubar: false,
        editable_root: false,
        editable_class: 'tiny-editable',
        elementpath: false,
        visual: false,
        link_target_list: false,
        link_list: [
            { title: "Features", value: 'https://www.tiny.cloud/tinymce/features/' },
            { title: "Docs", value: 'https://www.tiny.cloud/docs/tinymce/latest/' },
            { title: "Pricing", value: 'https://www.tiny.cloud/pricing/' }
        ],
        object_resizing: false,
        formats: {
            h1: { block: 'h1', styles: { fontSize: '24px', color: '#335dff' } },
            h2: { block: 'h2', styles: { fontSize: '20px' } },
            largetext: { block: 'p', styles: { fontSize: '20px' } },
            calltoaction: { selector: 'a', styles: { backgroundColor: '#335dff', padding: '12px 16px', color: '#ffffff', borderRadius: '4px', textDecoration: 'none', display: 'inline-block' } }
        },
        style_formats: [
            { title: 'Paragraph', format: 'p' },
            { title: 'Heading 1', format: 'h1' },
            { title: 'Heading 2', format: 'h2' },
            { title: 'Large text', format: 'largetext' },
            { title: 'Button styles' },
            { title: 'Call-to-action', format: 'calltoaction' },
        ],
        ai_shortcuts: [
            { title: 'Format as marketing email', prompt: 'Turn this content into an HTML-formatted marketing email in fixed-width and mobile-friendly table form, following screen width best practices' },
            { title: 'Generate call to action', prompt: 'Generate an appropriate and short call to action for this email, in the form a button.' }
        ],
        images_file_types: "jpeg,jpg,png,gif",
        spellchecker_ignore_list: ['i.e', 'Mailchimp', 'CSS-inlined'],
        mergetags_list: [
            {
                title: "Contact",
                menu: [{
                    value: 'Contact.FirstName',
                    title: 'Contact First Name'
                },
                {
                    value: 'Contact.LastName',
                    title: 'Contact Last Name'
                },
                {
                    value: 'Contact.Email',
                    title: 'Contact Email'
                }
                ]
            },
            {
                title: "Sender",
                menu: [{
                    value: 'Sender.FirstName',
                    title: 'Sender First Name'
                },
                {
                    value: 'Sender.LastName',
                    title: 'Sender Last name'
                },
                {
                    value: 'Sender.Email',
                    title: 'Sender Email'
                }
                ]
            },
            {
               title: 'Subscription',
                menu: [{
                    value: 'Subscription.UnsubscribeLink',
                    title: 'Unsubscribe Link'
                },
                {
                    value: 'Subscription.Preferences',
                    title: 'Subscription Preferences'
                }
                ]
            }
        ],
        advtemplate_templates: [
            {
                title: "Newsletter intro",
                content:
                    '<h1 style="font-size: 24px; color: rgb(51, 93, 255); font-family:Arial;">TinyMCE Newsletter</h1>\n<p style="font-family:Arial;">Welcome to your monthly digest of all things TinyMCE, where you"ll find helpful tips, how-tos, and stories of how people are using rich text editing to bring their apps to new heights!</p>',
            },
            {
                title: "CTA Button",
                content:
                    '<p><a style="background-color: rgb(51, 93, 255); padding: 12px 16px; color: rgb(255, 255, 255); border-radius: 4px; text-decoration: none; display: inline-block; font-family:Arial;" href="<a href="https://tiny.cloud/pricing">https://tiny.cloud/pricing</a>">Get started with your 14-day free trial</a></p>',
            },
            {
                title: "Footer",
                content:
                    '<p style="text-align: center; font-size: 10px; font-family:Arial;">You received this email at because you previously subscribed.</p>\n<p style="text-align: center; font-size: 10px; font-family:Arial;">#{Subscription.Preferences}# | #{Subscription.UnsubscribeLink}#</p>',
            },
        ],
        content_style: `
  body {
    background-color: #f9f9fb;
  }
  /* Edit area functional css */
  .tiny-editable {
    position: relative;
  }
  .tiny-editable:hover:not(:focus),
  .tiny-editable:focus {
    outline: 3px solid #b4d7ff;
    outline-offset: 4px;
  }
  /* Create an edit placeholder */
  .tiny-editable:empty::before,
  .tiny-editable:has(> br[data-mce-bogus]:first-child)::before {
    content: "Write here...";
    position: absolute;
    top: 0;
    left: 0;
    color: #999;
  }
`
    });
</script>