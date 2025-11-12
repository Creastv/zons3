<video id="bg-video" autoplay loop playsinline muted>
    <source src="http://localhost/zons3/wp-content/uploads/2025/11/final-banner-1920x1080p-3-1.mp4" type="video/mp4">
</video>

<script>
    document.getElementById('bg-video').play();
</script>
<script>
    // document.addEventListener('DOMContentLoaded', () => {
    //     const video = document.getElementById('bg-video');
    //     const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

    //     const handleAutoplayBlock = () => {
    //         const resumeVideo = () => {
    //             video.play();
    //             document.removeEventListener('touchstart', resumeVideo);
    //             document.removeEventListener('click', resumeVideo);
    //         };
    //         document.addEventListener('touchstart', resumeVideo);
    //         document.addEventListener('click', resumeVideo);
    //     };

    //     const attemptPlay = () => {
    //         const playPromise = video.play();

    //         if (playPromise !== undefined) {
    //             playPromise.catch(handleAutoplayBlock);
    //         }
    //     };

    //     if (isSafari) {
    //         setTimeout(attemptPlay, 2000);
    //         alert('Safari');
    //     } else {
    //         attemptPlay();
    //         alert('Chrome');
    //     }
    // });
</script>