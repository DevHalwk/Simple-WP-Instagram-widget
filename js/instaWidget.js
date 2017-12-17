 
 var prisma_volo = 3680765207.1677ed0.c5d83410bde342139814149799765b48; // instagram token. You can get yout token by login on your instagram and then going to http://instagram.pixelunion.net/
 
 $('.instagram-pics').instagramLite({
    accessToken: prisma_volo,
    limit:'8',  // number of total pictures you want to get
    urls: 'true' // pics are clickable and weill redirect to the pic on Instagram
});

$('.sidebar-instagram-pics').instagramLite({
  accessToken: prisma_volo,
  limit:'12',// number of total pictures you want to get
  urls: 'true'// pics are clickable and weill redirect to the pic on Instagram
});