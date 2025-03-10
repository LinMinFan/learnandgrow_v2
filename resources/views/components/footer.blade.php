<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="social-links">
            <a href="https://github.com/LinMinFan" class="gitHub" target="_blank">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/jacklin0110" class="linkedin" target="_blank">
                <i class="bx bxl-linkedin"></i>
            </a>
        </div>
        <span>
            Email: 
            <a href="mailto:{{ $site->firstWhere('key', 'email')->value }}">
                {{ $site->firstWhere('key', 'email')->value }}
            </a>
        </span>
        <div class="copyright">
            Copyright &copy; 2025 <i class="fa-regular fa-heart"></i> by LinMinFan
        </div>
        <div class="credits">
            
        </div>
    </div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>