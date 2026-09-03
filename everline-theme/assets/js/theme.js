/**
 * EverLine Metal Fencing — Interactive Application Logic
 * A Best Buy Metals Product
 */

document.addEventListener('DOMContentLoaded', () => {
  initStickyHeader();
  initMobileMenu();
  initAnnouncementBar();
  initFaqAccordion();
  initModals();
  initSmoothScroll();
});

/* ==========================================================================
   Sticky Header
   ========================================================================== */
function initStickyHeader() {
  const header = document.getElementById('mainHeader');
  if (!header) return;

  const handleScroll = () => {
    if (window.scrollY > 20) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();
}

/* ==========================================================================
   Mobile Menu Drawer
   ========================================================================== */
function initMobileMenu() {
  const toggleBtn = document.getElementById('mobileMenuToggle');
  const drawer = document.getElementById('mobileDrawer');
  const navLinks = document.querySelectorAll('.mobile-nav-link');
  const mobileAvailBtn = document.getElementById('mobileCheckAvailBtn');

  if (!toggleBtn || !drawer) return;

  const toggleDrawer = () => {
    const isOpen = drawer.classList.contains('open');
    if (isOpen) {
      drawer.classList.remove('open');
      toggleBtn.classList.remove('active');
      toggleBtn.setAttribute('aria-expanded', 'false');
    } else {
      drawer.classList.add('open');
      toggleBtn.classList.add('active');
      toggleBtn.setAttribute('aria-expanded', 'true');
    }
  };

  toggleBtn.addEventListener('click', toggleDrawer);

  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      drawer.classList.remove('open');
      toggleBtn.classList.remove('active');
      toggleBtn.setAttribute('aria-expanded', 'false');
    });
  });

  if (mobileAvailBtn) {
    mobileAvailBtn.addEventListener('click', () => {
      drawer.classList.remove('open');
      toggleBtn.classList.remove('active');
      openModal('quoteModal');
    });
  }
}

/* ==========================================================================
   Announcement Bar
   ========================================================================== */
function initAnnouncementBar() {
  const bar = document.getElementById('announcementBar');
  const closeBtn = document.getElementById('closeAnnouncement');

  if (!bar || !closeBtn) return;

  // Check session storage
  if (sessionStorage.getItem('everline_announcement_dismissed') === 'true') {
    bar.style.display = 'none';
  }

  closeBtn.addEventListener('click', () => {
    bar.style.display = 'none';
    sessionStorage.setItem('everline_announcement_dismissed', 'true');
  });
}

/* ==========================================================================
   FAQ Accordion (Smooth Expand/Collapse)
   ========================================================================== */
function initFaqAccordion() {
  const items = document.querySelectorAll('.accordion-item');

  items.forEach(item => {
    const trigger = item.querySelector('.accordion-trigger');
    const panel = item.querySelector('.accordion-panel');

    if (!trigger || !panel) return;

    trigger.addEventListener('click', () => {
      const isExpanded = trigger.getAttribute('aria-expanded') === 'true';

      // Optional: Close other open accordion panels for clean accordion behavior
      items.forEach(otherItem => {
        if (otherItem !== item) {
          const otherTrigger = otherItem.querySelector('.accordion-trigger');
          const otherPanel = otherItem.querySelector('.accordion-panel');
          if (otherTrigger && otherPanel) {
            otherTrigger.setAttribute('aria-expanded', 'false');
            otherPanel.style.maxHeight = null;
          }
        }
      });

      if (isExpanded) {
        trigger.setAttribute('aria-expanded', 'false');
        panel.style.maxHeight = null;
      } else {
        trigger.setAttribute('aria-expanded', 'true');
        panel.style.maxHeight = panel.scrollHeight + 'px';
      }
    });
  });
}

/* ==========================================================================
   Modals (Quote Request & Collection Specs)
   ========================================================================== */
const SPEC_DATA = {
  ridgeline: {
    title: 'RidgeLine Open Rail Fence Specifications',
    subtitle: 'Engineered for open architectural sightlines and enduring landscape boundaries.',
    features: [
      { label: 'System Type', value: 'Architectural Horizontal Metal Rail' },
      { label: 'Rail Configuration', value: '3-Rail or 4-Rail vertical spacing' },
      { label: 'Substrate', value: '24, 26, 29 gauge steel' },
      { label: 'Coating Systems', value: 'Painted: primer & Galvalume® substrate under paint; Unpainted: 55% Al / 45% Zn with clear acrylic overcoat' },
      { label: 'Post Spacing', value: '6 ft and 8 ft on-center standard' },
      { label: 'Applications', value: 'Perimeter boundaries, residential frontages, estates, equestrian' },
      { label: 'Maintenance', value: 'Zero staining, sealing, or painting required; wash with water' },
      { label: 'Painted Warranty', value: '50-Year paint warranty, 50-Year substrate warranty, 30-Year fade/chalk warranty' },
      { label: 'Galvalume Warranty', value: '45-Year unpainted Galvalume® warranty' }
    ]
  },
  timberline: {
    title: 'TimberLine Contemporary Fence Specifications',
    subtitle: 'Natural wood-grain aesthetics paired with heavy-duty metal privacy engineering.',
    features: [
      { label: 'System Type', value: 'Full-Privacy Architectural Metal Tongue-and-Groove' },
      { label: 'Standard Heights', value: '6 ft standard residential privacy' },
      { label: 'Slat Orientation', value: 'Clean modern horizontal interlocking slats' },
      { label: 'Finish Options', value: 'High-definition architectural woodgrain patterns & matte solid tones' },
      { label: 'Substrate', value: '24, 26, 29 gauge steel' },
      { label: 'Coating Systems', value: 'Painted: primer & Galvalume® substrate under paint; Unpainted: 55% Al / 45% Zn with clear acrylic overcoat' },
      { label: 'Post System', value: 'Internal concealed channel posts (zero visible fasteners)' },
      { label: 'Applications', value: 'Backyard retreats, pool enclosures, patio privacy, commercial screening' },
      { label: 'Maintenance', value: 'Zero staining, sealing, or painting required; wash with water' },
      { label: 'Painted Warranty', value: '50-Year paint warranty, 50-Year substrate warranty, 30-Year fade/chalk warranty' },
      { label: 'Galvalume Warranty', value: '45-Year unpainted Galvalume® warranty' }
    ]
  }
};

function openModal(modalId) {
  const modal = document.getElementById(modalId);
  if (!modal) return;
  modal.classList.add('active');
  modal.setAttribute('aria-hidden', 'false');
  document.body.style.overflow = 'hidden';
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (!modal) return;
  modal.classList.remove('active');
  modal.setAttribute('aria-hidden', 'true');
  document.body.style.overflow = '';
}

function initModals() {
  // Quote Modal Triggers
  const openQuoteBtns = [
    document.getElementById('openQuoteModalBtn'),
    document.getElementById('mobileCheckAvailBtn'),
    document.getElementById('heroLaunchPricingBtn'),
    document.getElementById('claimOfferBtn'),
    document.getElementById('contactSalesBtn')
  ];

  openQuoteBtns.forEach(btn => {
    if (btn) {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        openModal('quoteModal');
      });
    }
  });

  const closeQuoteBtn = document.getElementById('closeQuoteModal');
  if (closeQuoteBtn) {
    closeQuoteBtn.addEventListener('click', () => closeModal('quoteModal'));
  }

  // Specifications Modal Triggers
  const specsBtns = document.querySelectorAll('.open-specs-btn');
  const specsModal = document.getElementById('specsModal');
  const closeSpecsBtn = document.getElementById('closeSpecsModal');
  const specsContainer = document.getElementById('specsModalContent');

  specsBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const collectionKey = btn.getAttribute('data-collection') || 'timberline';
      const data = SPEC_DATA[collectionKey] || SPEC_DATA.timberline;

      if (specsContainer) {
        specsContainer.innerHTML = `
          <div class="specs-card">
            <h4 class="specs-card-title">${data.title}</h4>
            <p style="font-size: 0.95rem; color: #61645e; margin-bottom: 20px;">${data.subtitle}</p>
            <table class="specs-table">
              <tbody>
                ${data.features.map(f => `
                  <tr>
                    <td class="specs-label">${f.label}</td>
                    <td class="specs-val">${f.value}</td>
                  </tr>
                `).join('')}
              </tbody>
            </table>
          </div>
          <div style="margin-top: 24px; text-align: center;">
            <button class="btn btn-dark" id="specsToQuoteBtn">
              <span>GET PRICING ON THIS COLLECTION</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        `;

        const specsToQuoteBtn = document.getElementById('specsToQuoteBtn');
        if (specsToQuoteBtn) {
          specsToQuoteBtn.addEventListener('click', () => {
            closeModal('specsModal');
            // Pre-select collection choice in quote modal
            const select = document.getElementById('collectionChoice');
            if (select) {
              select.value = collectionKey === 'timberline' ? 'TimberLine' : 'RidgeLine';
            }
            setTimeout(() => openModal('quoteModal'), 200);
          });
        }
      }

      openModal('specsModal');
    });
  });

  if (closeSpecsBtn) {
    closeSpecsBtn.addEventListener('click', () => closeModal('specsModal'));
  }

  // Close modals when clicking backdrop
  document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
    backdrop.addEventListener('click', (e) => {
      if (e.target === backdrop) {
        closeModal(backdrop.id);
      }
    });
  });

  // Close on Escape key
  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeModal('quoteModal');
      closeModal('specsModal');
    }
  });

  // Quote Form Submission Handling
  const form = document.getElementById('quoteForm');
  const successState = document.getElementById('modalSuccessState');
  const closeSuccessBtn = document.getElementById('closeSuccessBtn');

  if (form && successState) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      // Simulate submission
      const submitBtn = document.getElementById('submitQuoteBtn');
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span>Processing Pre-Order...</span>';
      }

      setTimeout(() => {
        form.style.display = 'none';
        successState.style.display = 'block';
      }, 700);
    });

    if (closeSuccessBtn) {
      closeSuccessBtn.addEventListener('click', () => {
        closeModal('quoteModal');
        // Reset form for future
        setTimeout(() => {
          form.reset();
          form.style.display = 'block';
          successState.style.display = 'none';
          const submitBtn = document.getElementById('submitQuoteBtn');
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = `<span>SUBMIT INQUIRY & LOCK IN 15% LAUNCH OFFER</span>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>`;
          }
        }, 300);
      });
    }
  }
}

/* ==========================================================================
   Smooth Scrolling for Anchors
   ========================================================================== */
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (!targetId || targetId === '#') return;

      const targetEl = document.querySelector(targetId);
      if (targetEl) {
        e.preventDefault();
        const header = document.getElementById('mainHeader');
        const headerOffset = header ? header.offsetHeight + 10 : 70;
        const elementPosition = targetEl.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    });
  });
}
