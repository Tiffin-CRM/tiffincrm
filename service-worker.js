// Listen for the install event
self.addEventListener('install', event => {
    event.waitUntil(
      caches.open('your-cache-name')
        .then(cache => {
          return cache.addAll([
            'assets/icons/favicon.ico',
            'img/pre.svg',
          ]);
        })
    );
  });
  
  // Listen for the fetch event
  self.addEventListener('fetch', event => {
    event.respondWith(
      caches.match(event.request)
        .then(response => {
          return response || fetch(event.request);
        })
    );
  });
  