# WordPress Block Editor (Gutenberg) Support

This document outlines the WordPress Block Editor (Gutenberg) compatibility features implemented in the Prism theme.

## ✅ Block Editor Features Enabled

### Core Block Support
The Prism theme now includes comprehensive support for WordPress blocks with the following features:

#### 1. **Wide and Full Alignment** (`align-wide`)
- Blocks can be set to **Wide** alignment (80rem max-width)
- Blocks can be set to **Full** alignment (full viewport width)
- Properly styled in both editor and front-end

#### 2. **Editor Styles** (`editor-styles`)
- Editor styles match the front-end appearance
- Custom fonts (Playfair Display + Inter) load in the editor
- Consistent typography and spacing

#### 3. **Color Palette** (`editor-color-palette`)
- Full Tailwind color palette available in block editor
- Custom colors can be selected
- Link color control enabled

#### 4. **Font Sizes** (`editor-font-sizes`)
- Predefined font sizes:
  - Small: 0.875rem
  - Medium: 1rem (default)
  - Large: 1.25rem
  - Extra Large: 1.5rem
  - Huge: 2rem
- Custom font sizes enabled
- Line height control enabled

#### 5. **Spacing Controls** (`custom-spacing`)
- Block gap control
- Margin controls
- Padding controls
- Multiple units: px, %, em, rem, vw, vh

#### 6. **Custom Line Height** (`custom-line-height`)
- Fine-tune line heights for better typography

#### 7. **Link Color** (`link-color`)
- Control link colors within blocks

#### 8. **Responsive Embeds** (`responsive-embeds`)
- YouTube, Vimeo, and other embeds are responsive
- Proper aspect ratio maintained

#### 9. **HTML5 Support**
- Modern HTML5 markup for galleries, captions, comments, etc.

## 📦 Supported Block Types

The theme includes custom styling for all core WordPress blocks:

### Content Blocks
- ✅ Paragraph
- ✅ Heading (H1-H6)
- ✅ List (ordered & unordered)
- ✅ Quote
- ✅ Pullquote
- ✅ Code
- ✅ Preformatted
- ✅ Verse

### Media Blocks
- ✅ Image (with captions)
- ✅ Gallery (responsive grid)
- ✅ Cover
- ✅ Video
- ✅ Audio
- ✅ File

### Design Blocks
- ✅ Button
- ✅ Columns
- ✅ Group
- ✅ Separator (multiple styles)
- ✅ Spacer
- ✅ Media & Text

### Embed Blocks
- ✅ YouTube
- ✅ Twitter
- ✅ Instagram
- ✅ Facebook
- ✅ All other WordPress embeds

### Other Blocks
- ✅ Table (with striped style)
- ✅ Calendar
- ✅ Search
- ✅ Archives
- ✅ Categories
- ✅ Latest Posts
- ✅ RSS

## 🎨 Design Philosophy

The block styles follow the luxury jewelry aesthetic of the Prism theme:

- **Clean & Minimal**: Simple, elegant designs that don't distract
- **Responsive**: All blocks work seamlessly on mobile, tablet, and desktop
- **Consistent Typography**: Uses Playfair Display for headings and Inter for body text
- **Subtle Animations**: Smooth transitions on interactive elements
- **Professional Color Palette**: Slate grays that complement jewelry imagery

## 🚫 Intentionally Disabled Features

For a focused development experience, the following are disabled:

1. **Full Site Editing (FSE)** - `block-templates` support is removed
   - Traditional theme approach with Blade templates
   - More control over theme structure
   
2. **Default Block Patterns** - `core-block-patterns` are removed
   - Reduces clutter in the inserter
   - Theme can add custom patterns if needed

These can be easily re-enabled by removing the corresponding `remove_theme_support()` calls in `app/setup.php`.

## 📝 Usage Examples

### Creating Content with Blocks

1. **Add an Image with Wide Alignment**:
   - Insert an Image block
   - Select "Wide width" from the alignment toolbar
   - Image will expand to 80rem width

2. **Create a Two-Column Layout**:
   - Insert a Columns block
   - Choose 2 columns
   - Add content to each column
   - Automatically responsive on mobile

3. **Add a Styled Quote**:
   - Insert a Quote block
   - Type your quote
   - Automatically styled with left border and italic text

4. **Embed a Video**:
   - Insert an Embed block (YouTube, Vimeo, etc.)
   - Paste the video URL
   - Video will be responsive with proper aspect ratio

### Customizing Block Colors

1. In the block editor, select any block that supports colors
2. In the sidebar, find "Color settings"
3. Choose from the Tailwind color palette
4. Or use the custom color picker

### Adjusting Typography

1. Select a block with text (paragraph, heading, etc.)
2. In the toolbar or sidebar, find "Font size"
3. Choose from predefined sizes or set a custom size
4. Adjust line height for optimal readability

## 🔧 Technical Implementation

### Files Modified

1. **`app/setup.php`**
   - Added block editor feature support declarations
   - Enabled: `align-wide`, `editor-styles`, `editor-color-palette`, `editor-font-sizes`, `custom-line-height`, `custom-spacing`, `link-color`

2. **`theme.json`**
   - Enhanced layout settings (added `wideSize`)
   - Enabled custom colors and link colors
   - Added font size presets
   - Enabled spacing controls (blockGap, margin, padding)
   - Enabled custom font sizes and line heights

3. **`resources/css/editor.css`**
   - Added comprehensive block styles for editor
   - Styled all core blocks
   - Added wide/full alignment styles
   - Matched front-end appearance

4. **`resources/css/app.css`**
   - Added comprehensive block styles for front-end
   - Styled all core blocks
   - Added responsive designs
   - Added alignment helpers

### Key CSS Classes

- `.alignwide` - Wide alignment (80rem)
- `.alignfull` - Full width alignment
- `.alignleft` - Float left
- `.alignright` - Float right
- `.aligncenter` - Center alignment
- `.wp-block-*` - Core block styles

## 🧪 Testing

To test block functionality:

1. **Install WordPress** with the Prism theme
2. **Create a new post or page**
3. **Add various blocks** from the inserter
4. **Test alignments**: Try wide and full width on images/groups
5. **Test colors**: Apply colors from the palette
6. **Test responsive design**: View on mobile/tablet
7. **Check editor vs front-end**: Ensure they match

## 📖 WordPress Resources

- [Block Editor Handbook](https://developer.wordpress.org/block-editor/)
- [Theme Support Reference](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/)
- [theme.json Documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)

## 🎯 Conclusion

The Prism theme is **fully compatible with WordPress blocks**. Users can leverage the full power of the block editor while maintaining the luxury jewelry aesthetic and performance characteristics of the theme.

All core blocks are styled, responsive, and ready for content creation. The theme provides a seamless block editing experience with styles that match between the editor and the front-end.
