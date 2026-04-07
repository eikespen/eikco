# Current eik.es — analysis

Captured by visiting and inspecting the live site. This document is the baseline we're rebuilding from.

## TL;DR

- **Platform**: Squarespace (template `scarlet-crow-twkd.squarespace.com`)
- **Primary language**: Norwegian (with a half-finished `/english` page)
- **Type**: Personal-brand single-operator service site for **Espen** — a buyer's agent helping (mostly Norwegian) buyers purchase property in Ciudad Quesada, Spain
- **Size**: ~5 pages + 3 articles. Small.
- **Content quality**: solid, personal, and well-written in Norwegian. Existing English content is partial and needs editing.
- **Design quality**: clean but generic Squarespace template — no real brand identity beyond a wordmark, single Poppins typeface, dark charcoal buttons, big photography. There's room to do much better.

## Sitemap

| URL | Title | Status |
| --- | --- | --- |
| `/` | Forside (Home) | Norwegian, full content |
| `/om` | Om (About) | Norwegian (not fully audited) |
| `/english` | "Your personal property advisor in Ciudad Quesada" | Mixed EN/NO, partial |
| `/artikler` | Artikler | 3 articles, all Norwegian |
| `/artikler/hva-er-en-kjopsraadgiver` | Hva er en kjøpsrådgiver / kjøpsmegler? | Article |
| `/artikler/apent-boligmarked` | Åpent boligmarked i Spania | Article |
| `/artikler/andersen-bache-wiig` | Mitt samarbeid med Rede Advokat | Article (partnership note) |
| `/kontakt` | Kontakt | Not audited |
| `/boligskjema` | Boligskjema (viewing request form) | Embedded form |

## Visual design — what's actually there

Inspected via DOM, not guessed from screenshots:

| Element | Value | Notes |
| --- | --- | --- |
| Body font | Poppins (sans-serif) | Single typeface for everything |
| H1 font | Poppins, weight 400 | No serif headlines despite the elegant feel |
| Body color | `#000000` (pure black) | High contrast |
| Body background | `#ffffff` (pure white) | |
| Hero headline color | `#ffffff` | Over photo |
| Button background | `rgb(42, 40, 41)` (dark charcoal, ~`#2a2829`) | |
| Button text | `#ffffff` | |
| Button radius | `6.4px` | Slightly rounded, not pill |
| Form section bg | Warm beige `~#dfd5c8` (visual estimate) | Used for the viewing form section |
| Logo | Wordmark "Eik&Co" in a serif-ish display style | **The screenshot shows a more decorative font for the logo specifically — likely an SVG, not Poppins** |

**My assessment**: The visual identity is one step above default Squarespace. There's a clear hand at work (the warm beige form section, the choice of big aerial photo, the personal "Jeg" voice) but no real brand system — no defined accent color, no typographic hierarchy beyond Poppins-everything, no recurring graphic elements.

## Information architecture (current)

```
┌─────────────────────────────────────────────────┐
│  Header: [Om] [English] [Artikler] [Kontakt]   │
│         Eik&Co (centered logo)   [FB][IG] [⬛] │
└─────────────────────────────────────────────────┘

Home page sections (top to bottom):
1. Hero (full-width photo of Quesada, white headline + small CTA pill)
2. Two-column intro: pitch left, expanded value-prop right
3. Beige viewing-request form (Name, Email, Date, Message)
4. About section (Espen photo + "Om meg" CTA)
5. "Boligmarkedet i Ciudad Quesada" (right column, with CTA)
6. "Om Ciudad Quesada" (two-column area description)
7. Centered tagline quote: "Alle er opptatt av å gjøre et best mulig boligsalg..."
8. Off-market newsletter signup (email only)
9. Footer
```

## Voice and brand — what to preserve

These are working and should carry over to the new site:

- **First-person, personal**: "Jeg" (I) throughout, not "we" or corporate language. This is a one-person operation and the site says so honestly.
- **The differentiator line**: *"Alle er opptatt av å gjøre et best mulig boligsalg. Alle burde være opptatt av å gjøre et tilsvarende godt boligkjøp."* — This is the strongest piece of writing on the site. Direct English: *"Everyone is focused on making the best possible property sale. Everyone should be focused on making an equally good purchase."* Use it.
- **No commission from buyer** — emphasized repeatedly, this is the core value prop and a real differentiator vs traditional Spanish agents.
- **Local credibility**: "My family and I have been fortunate to call Ciudad Quesada our home for the past four years" (from `/english`). This is gold for trust — keep it prominent.
- **Network angle**: Espen's network of lawyers, bank contacts, developers — mentioned in the testimonial and in his own copy. This is the practical "what you actually get" value.

## Existing English copy we can reuse (partial)

The `/english` page already has these sections written in English (just needs editing/polish):

1. **Hero headline**: *"Your personal property advisor in Ciudad Quesada"*
2. **About me** — full paragraph
3. **Testimonial from Kenneth Henriksen** — solid, usable verbatim
4. **What is a buyer's agent?** — process explained in 6 steps + benefits
5. **How does the buyer's agent get paid?** — commission/transparency explainer
6. **Why not just use an estate agent?** — comparison piece (but contains a stray reference to "Spaniabolig" — leftover from a different project, must be removed)
7. **How I work** — Mapping → Searching → Viewings → Dream home process

This is enough raw material to draft the entire English Home, About, and How-it-works pages without writing from scratch — we just edit, tighten, and remove the duplications.

**Issue**: the `/english` page mixes Norwegian and English in the same section ("What is a buyer's agent?" has the Norwegian version followed by the English version, both shown). It's visibly unfinished.

## Content gaps the new site should fill

Things the current site doesn't do that we should:

1. **No real "Areas" content** — Ciudad Quesada, La Marquesa, La Fiesta are mentioned in passing but there are no dedicated pages. These are SEO gold for buyers researching specific neighborhoods.
2. **No process page** — the buying-process content exists scattered across `/english` and articles but isn't a clear, scannable "How it works" page.
3. **No real testimonials section** — only Kenneth Henriksen's quote on the English page. If there are more clients willing to be quoted, surface them.
4. **No FAQ** — buyer's agent commission, legal process, taxes, NIE numbers, residency are all questions a Norwegian buyer will have.
5. **Articles are thin** — only 3 posts. The new site should make publishing easy and the area pages can double as evergreen long-form content.
6. **No transparent pricing or "what's included"** — the no-commission claim is great, but buyers want to know if there are *any* fees, retainers, etc.

## Existing assets we can scrape/reuse

- **Hero photo**: aerial shot of Ciudad Quesada (white houses + sea + hillside) — strong, on-brand. Either reuse or commission a similar but fresh shot.
- **Espen portrait**: blue suit jacket, used in the about section. Decent but a more natural/environmental portrait (Espen in Quesada, outside, daylight) would be stronger.
- **Article copy**: 3 Norwegian articles can be translated as a starting point.
- **Testimonial from Kenneth Henriksen**: ready to use.
- **The differentiator quote**: ready to use.

## What to deliberately change

| Current | New |
| --- | --- |
| Squarespace | WordPress block theme (already scaffolded) |
| Norwegian primary, broken English | English primary; Norwegian as a future second language via Polylang if needed |
| Generic Poppins-everything | Real type pairing — serif display + sans body (Playfair + Inter is what we scaffolded; can be swapped) |
| Charcoal-only button system | A proper accent color (currently scaffolded as Eik Green `#2f5d4f`) — this needs your sign-off, see open questions |
| Mixed-language `/english` page | Clean, dedicated English pages |
| 3 thin articles | Same articles re-edited in English + new evergreen area pages |
| Logo: serif wordmark "Eik&Co" | Likely keep the wordmark — it's the only brand asset and it works. Confirm. |
| `Boligskjema` (Norwegian button) | `Request a viewing` or similar |
| Stray "Spaniabolig" reference on `/english` | Remove |
| Form section in heavy beige | Lighter, more integrated section style |

## Open questions for you

These are the things I can't decide on my own:

1. **Brand colors** — I scaffolded Eik Green + Terracotta + Sand. Do you actually have brand colors, or am I free to propose? The current site has none.
2. **Logo** — is the "Eik&Co" wordmark on the current site the official logo, and do you have an SVG/source file for it? If yes, send it. If no, we should remake it.
3. **Photography** — do you have a library of your own photos (Quesada, areas, properties, you), or do we need to commission/source? Unsplash placeholders are not a long-term plan.
4. **Spaniabolig** — I saw a stray reference on `/english`. Is Spaniabolig a related brand of yours, a competitor, or leftover content from another project that should be deleted?
5. **Norwegian + English, or English only?** You said "should be in English as well" — does that mean *both* languages, or *English instead of Norwegian*? This affects whether we install Polylang from day one.
6. **Testimonials** — do you have more than just Kenneth Henriksen's? If yes, get them ready.
7. **The 3 existing articles** — should we translate them to English and import to the new site, or start fresh with new content?
