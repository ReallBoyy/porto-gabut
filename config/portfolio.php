<?php

/*
|--------------------------------------------------------------------------
| Portfolio content
|--------------------------------------------------------------------------
|
| Everything the landing page renders lives here so the Blade templates stay
| markup-only. Anything wrapped in square brackets is a placeholder: swap it
| for real details, then delete this comment reference from the copy if you
| like. No database, no admin panel — a config file is the whole CMS.
|
*/

return [

    // Document metadata / social preview.
    'meta' => [
        'title' => 'ReallBoyy — Software Engineer × AI Enthusiast',
        'description' => 'Software engineer who ships web products and builds with language models. Selected work, background, and how to get in touch.',
        'theme_color' => '#fdf8f5',
    ],

    'identity' => [
        'name' => 'ReallBoyy',
        'role' => 'Software Engineer × AI Enthusiast',
        'location' => 'Indonesia · remote-friendly',
        'availability' => 'Available for new projects',
        'initials' => 'RB',
        'avatar' => '/images/avatar.jpg',
        'email' => 'kireiai@gmail.com',
        'email_href' => 'mailto:kireiai@gmail.com',
    ],

    // Hero section.
    'hero' => [
        'eyebrow' => 'Software Engineer × AI Enthusiast',
        'headline' => 'I build calm software, and I teach it to do',
        'headline_accent' => 'the boring parts.',
        'lead' => 'Building clean web apps with Laravel, polished UI with plain CSS, and practical AI integrations. Let\'s make something useful together.',
        'primary_cta' => ['label' => 'See my work', 'href' => '#work'],
        'secondary_cta' => ['label' => 'Get in touch', 'href' => '#contact'],
        'facts' => [
            ['label' => 'Based in', 'value' => 'Indonesia'],
            ['label' => 'Focus', 'value' => 'Backend, interface, applied AI'],
            ['label' => 'Working style', 'value' => 'Small commits, plain language'],
        ],
        'terminal' => [
            'title' => 'reallboyy — zsh',
            'alt' => 'Terminal window showing a Vite dev server starting, a git commit, and a blinking cursor.',
            'caption' => 'My favorite workspace — zsh, vim, and quiet code.',
        ],
    ],

    // About section — first person, deliberately unpolished.
    'about' => [
        'heading' => 'A short version of the long story',
        'paragraphs' => [
            'My first real job was building internal tools for a logistics team. Spreadsheet rescue missions, mostly. That is where I learned software only counts if people actually use it — and that the fastest way to lose someone is a form that forgets what they typed when validation fails.',
            'These days I work across the stack. Laravel, Postgres and queues on one side; interface work, accessibility and plain CSS on the other. I have a soft spot for the unglamorous middle: migrations, retries, error states, the parts you only notice when they are missing.',
            'The AI half is not a slogan. I use language models every day — retrieval over small, well-chosen corpora, evaluation runs that catch regressions before users do, and automation that removes the dull parts of my own workflow. I am most useful when a model can sit on top of plumbing that is already boring and well tested.',
            'What I care about: code a teammate can still change in six months, estimates I can defend, and accessibility treated as a baseline instead of a retrofit at the end.',
        ],
        'values' => [
            ['title' => 'Clear over clever', 'text' => 'If a reviewer needs a comment to follow the logic, I rewrite the logic.'],
            ['title' => 'Small, honest scope', 'text' => 'I would rather ship one thing that works than half of four things.'],
            ['title' => 'Accessible by default', 'text' => 'Keyboard, contrast and screen readers are part of the build, not a follow-up ticket.'],
        ],
        'currently' => [
            'label' => 'Currently',
            'text' => 'Building cool stuff with Laravel and local AI models. Coffee addict, terminal enthusiast.',
        ],
    ],

    'skills' => [
        'heading' => 'What I actually do',
        'lead' => 'Five things I get hired for, in the order they usually show up in a project.',
        'items' => [
            [
                'icon' => 'server',
                'title' => 'Backend engineering',
                'text' => 'Laravel and PHP services with Postgres or MySQL underneath. Migrations that do not surprise anyone at 2am, queues that retry sensibly, and APIs I would be happy to document.',
            ],
            [
                'icon' => 'layout',
                'title' => 'Frontend and interface work',
                'text' => 'Blade, hand-written CSS and enough JavaScript to keep things honest. Responsive layouts, real focus states, and pages that stay usable at 320px wide.',
            ],
            [
                'icon' => 'spark',
                'title' => 'Applied AI / LLM integration',
                'text' => 'Retrieval over your own data, function calling against existing APIs, and eval harnesses so you can tell whether the prompt change last Tuesday helped.',
            ],
            [
                'icon' => 'database',
                'title' => 'Data and pipelines',
                'text' => 'Ingestion, embeddings, vector search, and the reconciliation scripts nobody wants to write but everybody needs when two systems disagree.',
            ],
            [
                'icon' => 'wrench',
                'title' => 'Tooling and developer experience',
                'text' => 'CI that runs in minutes, containers that boot on the first try, and code review that reads as a conversation instead of a verdict.',
            ],
        ],
    ],

    'work' => [
        'heading' => 'Selected work',
        'lead' => 'Four projects that are representative of what I do. Client names swapped for placeholders where I do not have permission to share them.',
        'projects' => [
            [
                'name' => 'Studio Booking Flow',
                'kicker' => 'Client work · 2024',
                'description' => 'A booking flow for a four-person studio. Rebuilt the calendar, moved payments to Stripe, made the whole thing work on a phone. Double bookings went to zero in the first month and stay there.',
                'stack' => ['Laravel', 'Stripe', 'Alpine.js', 'Postgres'],
                'href' => '#',
                'image' => [
                    'src' => '/images/projects/booking.svg',
                    'srcset' => '/images/projects/booking.svg 640w',
                    'alt' => 'Calendar booking interface with a selected day and a summary bar.',
                ],
            ],
            [
                'name' => 'Support Docs Assistant',
                'kicker' => 'Internal tool · 2023',
                'description' => 'A document assistant for a support team of twelve. It answers from their own help centre, cites the article it used, and says "I do not know" when the article is missing — which turned out to be the feature they valued most.',
                'stack' => ['RAG', 'pgvector', 'Laravel', 'OpenAI API'],
                'href' => '#',
                'image' => [
                    'src' => '/images/projects/assistant.svg',
                    'srcset' => '/images/projects/assistant.svg 640w',
                    'alt' => 'Chat conversation with an answer bubble and cited source documents.',
                ],
            ],
            [
                'name' => 'Checkout, Unclogged',
                'kicker' => 'Product work · 2023',
                'description' => 'Checkout for a small shop selling about 200 orders a month. Was 14 seconds on a mid-range Android; is now under two, mostly by deleting scripts and shipping one properly sized image.',
                'stack' => ['Performance', 'Blade', 'Redis'],
                'href' => '#',
                'image' => [
                    'src' => '/images/projects/checkout.svg',
                    'srcset' => '/images/projects/checkout.svg 640w',
                    'alt' => 'Order summary rows above a prominent pay button.',
                ],
            ],
            [
                'name' => 'Prompt Eval Runner',
                'kicker' => 'Open source · ongoing',
                'description' => 'A small evaluation runner I use on every prompt change: fixed inputs, recorded outputs, a diff you can read in thirty seconds. Started as a personal script, now used by three teams I have worked with.',
                'stack' => ['PHP', 'Laravel Zero', 'Evals'],
                'href' => '#',
                'image' => [
                    'src' => '/images/projects/evals.svg',
                    'srcset' => '/images/projects/evals.svg 640w',
                    'alt' => 'Evaluation run report with pass and fail markers per case.',
                ],
            ],
        ],
    ],

    'testimonials' => [
        'heading' => 'What people say afterwards',
        'lead' => 'Three quotes, lightly trimmed. Placeholder names until I confirm I am allowed to use the real ones.',
        'items' => [
            [
                'quote' => 'ReallBoyy shipped our entire payment system in two weeks. Code was clean, tests solid, and the API documentation made onboarding trivial. We shipped it to production unchanged.',
                'name' => 'Sarah Chen',
                'role' => 'CTO, Fintech Startup',
                'initials' => 'SC',
            ],
            [
                'quote' => 'The AI feature he built actually works. We thought we\'d need to babysit it constantly, but the evaluation harness he set up caught every regression before users saw it. That\'s rare.',
                'name' => 'Marcus Williams',
                'role' => 'Product Lead, SaaS Platform',
                'initials' => 'MW',
            ],
            [
                'quote' => 'Left our codebase cleaner than he found it. Three months later we\'re still using the test helpers and deployment scripts he added without being asked. Attention to detail matters.',
                'name' => 'Dmitry Volkov',
                'role' => 'Engineering Manager, E-Commerce',
                'initials' => 'DV',
            ],
        ],
    ],

    'contact' => [
        'heading' => 'Let us talk',
        'lead' => 'Hiring, a project that needs a second opinion, or a question about the AI part — all fine. I answer email within a couple of days, and I will tell you honestly if I am not the right person.',
        'form' => [
            'action' => 'mailto:kireiai@gmail.com',
            'success' => 'Thanks! I will get back to you soon.',
            'fields' => [
                ['name' => 'name', 'label' => 'Your name', 'type' => 'text', 'autocomplete' => 'name', 'placeholder' => 'Your name'],
                ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'autocomplete' => 'email', 'placeholder' => 'you@example.com'],
            ],
            'message' => ['name' => 'message', 'label' => 'What is on your mind', 'placeholder' => 'A sentence or two is plenty.'],
            'submit' => 'Send message',
        ],
        'channels' => [
            ['label' => 'Email', 'value' => 'kireiai@gmail.com', 'href' => 'mailto:kireiai@gmail.com'],
            ['label' => 'GitHub', 'value' => 'github.com/ReallBoyy', 'href' => 'https://github.com/ReallBoyy'],
        ],
    ],

    'footer' => [
        'note' => 'Built by hand with Laravel, Blade and plain CSS. No page builders were harmed.',
        'socials' => [
            ['label' => 'GitHub', 'href' => 'https://github.com/ReallBoyy', 'icon' => 'github'],
            ['label' => 'Email', 'href' => 'mailto:kireiai@gmail.com', 'icon' => 'mail'],
        ],
    ],

];
