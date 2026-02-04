/**
 * Main JavaScript file for RGB Rock Light Theme
 *
 * @package Product_Theme
 * @since 1.0.0
 */

(function () {
    'use strict';

    /**
     * DOM Content Loaded Event
     */
    document.addEventListener('DOMContentLoaded', function () {
        initMobileMenu();
        initSmoothScroll();
        initScrollAnimations();
    });

    /**
     * Initialize Mobile Menu Toggle
     */
    function initMobileMenu() {
        var menuToggle = document.querySelector('.menu-toggle');
        var mainNav = document.querySelector('.main-navigation');

        if (!menuToggle || !mainNav) {
            return;
        }

        // Create mobile nav wrapper
        var mobileNav = document.createElement('div');
        mobileNav.className = 'mobile-nav';
        mobileNav.innerHTML = '<button class="mobile-nav__close" aria-label="Close menu">&times;</button>';
        mobileNav.appendChild(mainNav.cloneNode(true));
        document.body.appendChild(mobileNav);

        var closeBtn = mobileNav.querySelector('.mobile-nav__close');

        // Toggle menu
        menuToggle.addEventListener('click', function () {
            var expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
            mobileNav.classList.toggle('is-active');
            document.body.style.overflow = mobileNav.classList.contains('is-active') ? 'hidden' : '';
        });

        // Close menu
        closeBtn.addEventListener('click', function () {
            menuToggle.setAttribute('aria-expanded', 'false');
            mobileNav.classList.remove('is-active');
            document.body.style.overflow = '';
        });

        // Close on link click
        mobileNav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                menuToggle.setAttribute('aria-expanded', 'false');
                mobileNav.classList.remove('is-active');
                document.body.style.overflow = '';
            });
        });

        // Close on escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && mobileNav.classList.contains('is-active')) {
                menuToggle.setAttribute('aria-expanded', 'false');
                mobileNav.classList.remove('is-active');
                document.body.style.overflow = '';
            }
        });
    }

    /**
     * Initialize Smooth Scrolling for Anchor Links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (e) {
                var href = this.getAttribute('href');

                if (href === '#') {
                    return;
                }

                var target = document.querySelector(href);

                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    /**
     * Initialize Scroll Animations
     */
    function initScrollAnimations() {
        var animatedElements = document.querySelectorAll('.feature-card, .application-card, .spec-card, .installation-feature, .hero__stat');

        if (!animatedElements.length) {
            return;
        }

        // Check if IntersectionObserver is supported
        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            animatedElements.forEach(function (el) {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        } else {
            // Fallback for browsers that don't support IntersectionObserver
            animatedElements.forEach(function (el) {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            });
        }
    }

})();
