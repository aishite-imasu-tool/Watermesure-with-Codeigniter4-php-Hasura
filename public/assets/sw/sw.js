const cacheName = 'v1'


const cacheAsset = [
    '/',
    '/watermeasure/public/Mobile/add',
    '/watermeasure/public/Mobile/update',
    // The asset link
    'https://code.jquery.com/jquery-3.5.1.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css',
    'https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
    '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
    'https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js',
    '"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
    'https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js',
    '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',

]

self.addEventListener('install', e => {
    console.log('Service Worker: Installed');

    e.waitUntil(
        caches
            .open(cacheName)
            .then(cache => {
                console.log('Service Worker: Caching Files');
                cache.addAll(cacheAssets);
            })
            .then(() => self.skipWaiting())
    );
});

// Call Activate Event
self.addEventListener('activate', e => {
    console.log('Service Worker: Activated');
    // Remove unwanted caches
    e.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.map(cache => {
                    if (cache !== cacheName) {
                        console.log('Service Worker: Clearing Old Cache');
                        return caches.delete(cache);
                    }
                })
            );
        })
    );
});

// Call Fetch Event
self.addEventListener('fetch', e => {
    console.log('Service Worker: Fetching');
    e.respondWith(fetch(e.request).catch(() => caches.match(e.request)));
});


function catchSite() {
    const cacheName = 'v2';

    // Call Install Event
    self.addEventListener('install', e => {
        console.log('Service Worker: Installed');
    });

    // Call Activate Event
    self.addEventListener('activate', e => {
        console.log('Service Worker: Activated');
        // Remove unwanted caches
        e.waitUntil(
            caches.keys().then(cacheNames => {
                return Promise.all(
                    cacheNames.map(cache => {
                        if (cache !== cacheName) {
                            console.log('Service Worker: Clearing Old Cache');
                            return caches.delete(cache);
                        }
                    })
                );
            })
        );
    });

    // Call Fetch Event
    self.addEventListener('fetch', e => {
        console.log('Service Worker: Fetching');
        e.respondWith(
            fetch(e.request)
                .then(res => {
                    // Make copy/clone of response
                    const resClone = res.clone();
                    // Open cahce
                    caches.open(cacheName).then(cache => {
                        // Add response to cache
                        cache.put(e.request, resClone);
                    });
                    return res;
                })
                .catch(err => caches.match(e.request).then(res => res))
        );
    });
}