import FaqSiteCategoriesSortable from "./site-categories-sortable";
import FaqSiteEntriesSortable from "./site-entries-sortable";

export default class FaqSiteEditorManager {
    constructor(containerId = 'faq-site-builder') {
        this.container = document.getElementById(containerId);
        if (!this.container) {
            return;
        }
        this.init();
    }

    init() {
        this.siteCategoriestContainer = this.container.querySelector('.site-categories-list');
        if (!this.siteCategoriestContainer) {
            return;
        }

        this.storeOrderUrl = this.siteCategoriestContainer.getAttribute('data-order-url');

        this.initComponents();
    }

    initComponents() {
        this.siteCategoriesSortable = new FaqSiteCategoriesSortable(this);
        this.siteEntriesSortable = new FaqSiteEntriesSortable(this);
    }

    async notify(data) {
        if (typeof jQuery?.jGrowl === 'function') {
            jQuery.jGrowl(data.message, {life: 10000, theme: data.type});
        }
    }

    async post(url, body) {
        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: new URLSearchParams(body)
            });
            const data = await response.json();
            this.notify(data);
            return data;
        } catch (error) {
            console.error('Error in request:', error);
            throw error;
        }
    }
}
