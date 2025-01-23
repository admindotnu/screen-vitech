var lang = {};

/**
 * Set the locale and redirect back
 */
function setLocale(locale, redirect = false) {
    localStorage.setItem('locale', locale);
    if (redirect) {
        window.location = document.referrer;
    }
}

/**
 * Translate all elements with the data-trans tag.
 */
function getTranslations() {
    const transElements = document.querySelectorAll('[data-trans]');
    const locale = localStorage.getItem('locale');

    $.ajax('/assets/json/lang.json', "GET").done(function (data) {
        lang = data;

        for (var transElement of transElements) {

            var translationQuery = $(transElement).data('trans');
            $(transElement).html((getTranslation(translationQuery, locale)));
        }
    });
}

/**
 * Get a translation based on the translation query and the locale.
 * @param query
 * @param locale
 * @returns string
 */
function getTranslation(query, locale) {

    var translation = lang[locale];
    if (translation) {
        for (const part of query.split('.')) {
            translation = translation.hasOwnProperty(part) ? translation[part] : translation;
        }
    }
    else {
        translation = query;
    }
    return 'string' === typeof translation ? translation : query;
}



