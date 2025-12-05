<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AvyroHub - Professional Exterior Design Solutions</title>
    <meta name="description" content="Transform your outdoor spaces with AvyroHub's expert exterior design services. From modern facades to beautiful landscaping, we create stunning outdoor environments. Click here to continue exploring our comprehensive design solutions.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .nav-container-xyz789 {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-abc123 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-def456 {
            font-size: 2rem;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
        }

        .nav-menu-ghi789 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-jkl012 {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 500;
        }

        .nav-link-jkl012:hover {
            color: #3498db;
        }

        .hero-section-mno345 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-pqr678 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-stu901 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-vwx234 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .cta-button-yza567 {
            background: linear-gradient(45deg, #3498db, #2980b9);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: transform 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
        }

        .cta-button-yza567:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
        }

        .section-wrapper-bcd890 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .services-grid-efg123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card-hij456 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            border-left: 4px solid #3498db;
        }

        .service-card-hij456:hover {
            transform: translateY(-5px);
        }

        .service-title-klm789 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .about-section-nop012 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 4rem 0;
        }

        .about-content-qrs345 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-tuv678 {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-wxy901 {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .about-image-wxy901 img {
            width: 100%;
            height: auto;
            display: block;
        }

        .history-timeline-zab234 {
            background: #f8f9fa;
            padding: 4rem 0;
        }

        .timeline-container-cde567 {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item-fgh890 {
            background: white;
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            position: relative;
            margin-left: 2rem;
        }

        .timeline-year-ijk123 {
            background: #3498db;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            position: absolute;
            left: -2rem;
            top: 1rem;
            font-weight: bold;
        }

        .reviews-section-lmn456 {
            background: linear-gradient(45deg, #ff9a9e 0%, #fecfef 50%, #fecfef 100%);
            padding: 4rem 0;
        }

        .reviews-grid-opq789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .review-card-rst012 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            position: relative;
        }

        .review-stars-uvw345 {
            color: #f39c12;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .reviewer-name-xyz678 {
            font-weight: bold;
            color: #2c3e50;
            margin-top: 1rem;
        }

        .process-section-abc901 {
            background: #2c3e50;
            color: white;
            padding: 4rem 0;
        }

        .process-steps-def234 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .process-step-ghi567 {
            text-align: center;
            padding: 2rem;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .process-step-ghi567:hover {
            transform: scale(1.05);
        }

        .step-number-jkl890 {
            background: #3498db;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        .gallery-section-mno123 {
            padding: 4rem 0;
            background: #ecf0f1;
        }

        .gallery-grid-pqr456 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1rem;
            margin-top: 3rem;
        }

        .gallery-item-stu789 {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .gallery-item-stu789:hover {
            transform: scale(1.03);
        }

        .gallery-item-stu789 img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }

        .footer-section-vwx012 {
            background: #2c3e50;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content-yza345 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-column-bcd678 h3 {
            margin-bottom: 1rem;
            color: #3498db;
        }

        .footer-link-efg901 {
            color: #bdc3c7;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .footer-link-efg901:hover {
            color: #3498db;
        }

        .phone-link-hij234 {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .footer-bottom-klm567 {
            border-top: 1px solid #34495e;
            padding-top: 1rem;
            text-align: center;
            color: #bdc3c7;
        }

        .section-title-nop890 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .section-subtitle-qrs123 {
            text-align: center;
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 2rem;
        }

        .modal-overlay-tuv456 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 2000;
        }

        .modal-content-wxy789 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-zab012 {
            position: absolute;
            top: 10px;
            right: 15px;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #999;
        }

        .continue-link-cde345 {
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            font-weight: bold;
            transition: transform 0.3s ease;
        }

        .continue-link-cde345:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .expertise-section-fgh678 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 4rem 0;
        }

        .expertise-grid-ijk901 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .expertise-card-lmn234 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        @media (max-width: 768px) {
            .nav-menu-ghi789 {
                display: none;
            }
            
            .hero-title-stu901 {
                font-size: 2.5rem;
            }
            
            .about-content-qrs345 {
                grid-template-columns: 1fr;
            }
            
            .timeline-item-fgh890 {
                margin-left: 0;
            }
            
            .timeline-year-ijk123 {
                position: relative;
                left: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <nav class="nav-container-xyz789">
        <div class="nav-wrapper-abc123">
            <a href="#home" class="logo-brand-def456">AvyroHub</a>
            <ul class="nav-menu-ghi789">
                <li><a href="#home" class="nav-link-jkl012">Home</a></li>
                <li><a href="#services" class="nav-link-jkl012">Services</a></li>
                <li><a href="#about" class="nav-link-jkl012">About</a></li>
                <li><a href="#history" class="nav-link-jkl012">History</a></li>
                <li><a href="#process" class="nav-link-jkl012">Process</a></li>
                <li><a href="#expertise" class="nav-link-jkl012">Expertise</a></li>
                <li><a href="#gallery" class="nav-link-jkl012">Gallery</a></li>
                <li><a href="#reviews" class="nav-link-jkl012">Reviews</a></li>
                <li><a href="#contact" class="nav-link-jkl012">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-mno345">
        <div class="hero-content-pqr678">
            <h1 class="hero-title-stu901">Transform Your Outdoor Spaces</h1>
            <p class="hero-subtitle-vwx234">Creating beautiful and functional exterior designs that enhance your property's appeal and value</p>
            <a href="#services" class="cta-button-yza567">Explore Our Services</a>
        </div>
    </section>

    <section id="services" class="section-wrapper-bcd890">
        <h2 class="section-title-nop890">Our Services</h2>
        <p class="section-subtitle-qrs123">Comprehensive exterior design solutions tailored to your vision</p>
        <div class="services-grid-efg123">
            <div class="service-card-hij456">
                <h3 class="service-title-klm789">Facade Renovation</h3>
                <p>Modernize your building's exterior with contemporary materials and innovative design approaches. Our team specializes in creating striking facades that blend functionality with aesthetic appeal.</p>
                <a href="#contact" class="continue-link-cde345">Click Here to Continue</a>
            </div>
            <div class="service-card-hij456">
                <h3 class="service-title-klm789">Landscape Architecture</h3>
                <p>Design comprehensive outdoor environments that seamlessly integrate hardscaping and softscaping elements. We create sustainable landscapes that thrive in your local climate.</p>
            </div>
            <div class="service-card-hij456">
                <h3 class="service-title-klm789">Outdoor Living Spaces</h3>
                <p>Develop functional outdoor areas including patios, decks, pergolas, and entertainment zones. Our designs maximize your outdoor potential while maintaining harmony with existing structures.</p>
            </div>
            <div class="service-card-hij456">
                <h3 class="service-title-klm789">Sustainable Design</h3>
                <p>Implement eco-friendly solutions including green roofs, rain gardens, and energy-efficient lighting systems. We prioritize environmental responsibility in all our projects.</p>
            </div>
            <div class="service-card-hij456">
                <h3 class="service-title-klm789">Commercial Exteriors</h3>
                <p>Enhance business properties with professional exterior designs that attract customers and reflect your brand identity. We understand the unique requirements of commercial spaces.</p>
            </div>
            <div class="service-card-hij456">
                <h3 class="service-title-klm789">Restoration Projects</h3>
                <p>Preserve and restore historic exteriors while incorporating modern functionality. Our expertise in traditional techniques ensures authentic restoration results.</p>
                <a href="#gallery" class="continue-link-cde345">Click Here to Continue</a>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-nop012">
        <div class="section-wrapper-bcd890">
            <div class="about-content-qrs345">
                <div>
                    <h2 class="section-title-nop890" style="color: white; text-align: left;">About AvyroHub</h2>
                    <div class="about-text-tuv678">
                        <p>AvyroHub has been transforming outdoor spaces for over two decades, bringing innovative design solutions to residential and commercial properties. Our multidisciplinary team combines architectural expertise with landscape design mastery to create exceptional exterior environments.</p>
                        <p>We believe that every outdoor space has unique potential. Our approach involves careful analysis of site conditions, client preferences, and environmental factors to develop designs that are both beautiful and practical. From initial concept to final implementation, we maintain the highest standards of quality and craftsmanship.</p>
                        <p>Our commitment to sustainability drives us to incorporate eco-friendly materials and practices in every project. We stay current with industry trends and technologies to offer our clients the most advanced solutions available.</p>
                    </div>
                </div>
                <div class="about-image-wxy901">
                    <img src="https://images.pexels.com/photos/1396132/pexels-photo-1396132.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Modern exterior design showcase">
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-timeline-zab234">
        <div class="section-wrapper-bcd890">
            <h2 class="section-title-nop890">Our Journey</h2>
            <p class="section-subtitle-qrs123">Decades of innovation and growth in exterior design</p>
            <div class="timeline-container-cde567">
                <div class="timeline-item-fgh890">
                    <div class="timeline-year-ijk123">2001</div>
                    <h3>Foundation Years</h3>
                    <p>AvyroHub was established by a group of passionate architects and landscape designers who shared a vision of creating extraordinary outdoor spaces. Our first projects focused on residential garden designs in the metropolitan area.</p>
                </div>
                <div class="timeline-item-fgh890">
                    <div class="timeline-year-ijk123">2005</div>
                    <h3>Commercial Expansion</h3>
                    <p>We expanded our services to include commercial exterior design projects. Our breakthrough came with the renovation of the Riverside Business Complex, which won the Regional Design Excellence Award.</p>
                </div>
                <div class="timeline-item-fgh890">
                    <div class="timeline-year-ijk123">2010</div>
                    <h3>Sustainable Focus</h3>
                    <p>Recognizing the growing importance of environmental responsibility, we became certified in sustainable design practices. We pioneered several green building techniques that are now industry standards.</p>
                </div>
                <div class="timeline-item-fgh890">
                    <div class="timeline-year-ijk123">2015</div>
                    <h3>Technology Integration</h3>
                    <p>We invested heavily in advanced design software and 3D visualization tools, allowing clients to experience their projects before construction begins. This innovation significantly improved client satisfaction and project accuracy.</p>
                </div>
                <div class="timeline-item-fgh890">
                    <div class="timeline-year-ijk123">2020</div>
                    <h3>Digital Transformation</h3>
                    <p>The global pandemic accelerated our digital capabilities. We developed virtual consultation processes and remote project management systems, making our services more accessible to clients nationwide.</p>
                </div>
                <div class="timeline-item-fgh890">
                    <div class="timeline-year-ijk123">2023</div>
                    <h3>Innovation Leadership</h3>
                    <p>Today, AvyroHub leads the industry in smart outdoor technology integration and climate-adaptive design solutions. We continue to push boundaries while maintaining our commitment to exceptional craftsmanship.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" class="expertise-section-fgh678">
        <div class="section-wrapper-bcd890">
            <h2 class="section-title-nop890" style="color: white;">Areas of Expertise</h2>
            <p class="section-subtitle-qrs123" style="color: rgba(255,255,255,0.8);">Specialized knowledge across multiple design disciplines</p>
            <div class="expertise-grid-ijk901">
                <div class="expertise-card-lmn234">
                    <h3>Climate-Responsive Design</h3>
                    <p>Our designs adapt to local weather patterns and seasonal changes, ensuring year-round functionality and beauty. We consider factors like wind patterns, sun exposure, and precipitation levels in every project.</p>
                </div>
                <div class="expertise-card-lmn234">
                    <h3>Material Innovation</h3>
                    <p>We stay at the forefront of material technology, incorporating advanced composites, smart materials, and sustainable alternatives that offer superior performance and longevity.</p>
                </div>
                <div class="expertise-card-lmn234">
                    <h3>Water Management</h3>
                    <p>Expertise in drainage solutions, irrigation systems, and water feature design ensures proper water management while creating beautiful aquatic elements in your landscape.</p>
                </div>
                <div class="expertise-card-lmn234">
                    <h3>Lighting Design</h3>
                    <p>Strategic lighting placement enhances safety, security, and ambiance. We design systems that highlight architectural features while providing functional illumination for outdoor activities.</p>
                    <a href="#reviews" class="continue-link-cde345">Click Here to Continue</a>
                </div>
                <div class="expertise-card-lmn234">
                    <h3>Plant Selection</h3>
                    <p>Our horticultural expertise ensures appropriate plant choices for your specific site conditions, maintenance preferences, and aesthetic goals. We create plant communities that thrive together.</p>
                </div>
                <div class="expertise-card-lmn234">
                    <h3>Structural Integration</h3>
                    <p>Seamless integration of hardscape elements with existing architecture creates cohesive designs that feel natural and purposeful rather than added as afterthoughts.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-abc901">
        <div class="section-wrapper-bcd890">
            <h2 class="section-title-nop890" style="color: white;">Our Design Process</h2>
            <p class="section-subtitle-qrs123" style="color: rgba(255,255,255,0.8);">A systematic approach to creating exceptional outdoor spaces</p>
            <div class="process-steps-def234">
                <div class="process-step-ghi567">
                    <div class="step-number-jkl890">1</div>
                    <h3>Initial Consultation</h3>
                    <p>We begin with a comprehensive discussion of your vision, needs, and budget. Site analysis and feasibility assessment help us understand the project scope and potential challenges.</p>
                </div>
                <div class="process-step-ghi567">
                    <div class="step-number-jkl890">2</div>
                    <h3>Concept Development</h3>
                    <p>Our design team creates initial concepts based on your requirements and site conditions. We present multiple options with detailed explanations of design rationale and material choices.</p>
                </div>
                <div class="process-step-ghi567">
                    <div class="step-number-jkl890">3</div>
                    <h3>Design Refinement</h3>
                    <p>Through collaborative feedback sessions, we refine the chosen concept to perfectly match your expectations. Detailed drawings and 3D visualizations help you envision the final result.</p>
                </div>
                <div class="process-step-ghi567">
                    <div class="step-number-jkl890">4</div>
                    <h3>Implementation</h3>
                    <p>Our experienced construction team brings the design to life with meticulous attention to detail. Regular progress updates keep you informed throughout the construction phase.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery-section-mno123">
        <div class="section-wrapper-bcd890">
            <h2 class="section-title-nop890">Project Gallery</h2>
            <p class="section-subtitle-qrs123">Showcasing our diverse portfolio of exterior design projects</p>
            <div class="gallery-grid-pqr456">
                <div class="gallery-item-stu789">
                    <img src="https://images.pexels.com/photos/1396132/pexels-photo-1396132.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Modern residential facade">
                </div>
                <div class="gallery-item-stu789">
                    <img src="https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Contemporary landscape design">
                </div>
                <div class="gallery-item-stu789">
                    <img src="https://images.pexels.com/photos/2102587/pexels-photo-2102587.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Commercial building exterior">
                </div>
                <div class="gallery-item-stu789">
                    <img src="https://images.pexels.com/photos/1396119/pexels-photo-1396119.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Outdoor living space">
                </div>
                <div class="gallery-item-stu789">
                    <img src="https://images.pexels.com/photos/2102588/pexels-photo-2102588.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Sustainable garden design">
                </div>
                <div class="gallery-item-stu789">
                    <img src="https://images.pexels.com/photos/1396118/pexels-photo-1396118.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Historic restoration project">
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-lmn456">
        <div class="section-wrapper-bcd890">
            <h2 class="section-title-nop890">Client Testimonials</h2>
            <p class="section-subtitle-qrs123">What our satisfied clients say about working with AvyroHub</p>
            <div class="reviews-grid-opq789">
                <div class="review-card-rst012">
                    <div class="review-stars-uvw345">★★★★★</div>
                    <p>"AvyroHub transformed our backyard into an incredible outdoor oasis. Their attention to detail and creative vision exceeded our expectations. The project was completed on time and within budget."</p>
                    <div class="reviewer-name-xyz678">- Sarah Mitchell, Homeowner</div>
                </div>
                <div class="review-card-rst012">
                    <div class="review-stars-uvw345">★★★★★</div>
                    <p>"The team's expertise in sustainable design helped us achieve LEED certification for our office complex. Their innovative solutions reduced our environmental impact while creating a beautiful workspace."</p>
                    <div class="reviewer-name-xyz678">- David Chen, Property Developer</div>
                </div>
                <div class="review-card-rst012">
                    <div class="review-stars-uvw345">★★★★★</div>
                    <p>"Working with AvyroHub was a pleasure from start to finish. They listened to our needs and delivered a design that perfectly captures our vision. The craftsmanship is outstanding."</p>
                    <div class="reviewer-name-xyz678">- Maria Rodriguez, Restaurant Owner</div>
                </div>
                <div class="review-card-rst012">
                    <div class="review-stars-uvw345">★★★★★</div>
                    <p>"The facade renovation of our historic building was handled with incredible skill and sensitivity. AvyroHub preserved the character while adding modern functionality."</p>
                    <div class="reviewer-name-xyz678">- James Thompson, Building Manager</div>
                </div>
                                    <div class="review-stars-uvw345">★★★★★</div>
                    <p>"The facade renovation of our historic building was handled with incredible skill and sensitivity. AvyroHub preserved the character while adding modern functionality."</p>
                    <div class="reviewer-name-xyz678">- James Thompson, Building Manager</div>
                </div>
                <div class="review-card-rst012">
                    <div class="review-stars-uvw345">★★★★★</div>
                    <p>"Their landscape architecture expertise created a stunning entrance for our corporate headquarters. The design perfectly balances professionalism with natural beauty."</p>
                    <div class="reviewer-name-xyz678">- Lisa Park, Facilities Director</div>
                </div>
                <div class="review-card-rst012">
                    <div class="review-stars-uvw345">★★★★★</div>
                    <p>"AvyroHub's team made our dream outdoor kitchen and entertainment area a reality. The space flows seamlessly and has become the heart of our home gatherings."</p>
                    <div class="reviewer-name-xyz678">- Robert Williams, Homeowner</div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="footer-section-vwx012">
        <div class="section-wrapper-bcd890">
            <div class="footer-content-yza345">
                <div class="footer-column-bcd678">
                    <h3>Contact Information</h3>
                    <p>Ready to transform your outdoor space? Get in touch with our design experts today.</p>
                    <p><strong>Phone:</strong> <a href="tel:+15551234567" class="phone-link-hij234">+1 (555) 123-4567</a></p>
                    <p><strong>Email:</strong> info@avrohub.com</p>
                    <p><strong>Address:</strong> 2847 Riverside Drive, Suite 300, Springfield, IL 62701</p>
                    <a href="#services" class="continue-link-cde345">Click Here to Continue</a>
                </div>
                <div class="footer-column-bcd678">
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 8:00 AM - 6:00 PM</p>
                    <p>Saturday: 9:00 AM - 4:00 PM</p>
                    <p>Sunday: By appointment only</p>
                    <p>Emergency consultations available 24/7</p>
                </div>
                <div class="footer-column-bcd678">
                    <h3>Service Areas</h3>
                    <p>We proudly serve clients throughout the greater metropolitan area and surrounding regions:</p>
                    <ul style="list-style: none; padding: 0;">
                        <li>• Springfield and surrounding counties</li>
                        <li>• Commercial projects nationwide</li>
                        <li>• Virtual consultations worldwide</li>
                        <li>• Specialized restoration projects</li>
                    </ul>
                </div>
                <div class="footer-column-bcd678">
                    <h3>Quick Links</h3>
                    <a href="#" onclick="showModal('privacy')" class="footer-link-efg901">Privacy Policy</a>
                    <a href="#" onclick="showModal('terms')" class="footer-link-efg901">Terms of Service</a>
                    <a href="#services" class="footer-link-efg901">Our Services</a>
                    <a href="#gallery" class="footer-link-efg901">Project Gallery</a>
                    <a href="#about" class="footer-link-efg901">About Us</a>
                    <a href="#contact" class="footer-link-efg901">Contact</a>
                </div>
            </div>
            <div class="footer-bottom-klm567">
                <p>© 2024 AvyroHub. All rights reserved. Professional exterior design services.</p>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-tuv456">
        <div class="modal-content-wxy789">
            <button class="modal-close-zab012" onclick="hideModal('privacy')">×</button>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated:</strong> January 2024</p>
            
            <h3>Information We Collect</h3>
            <p>AvyroHub collects information you provide directly to us, such as when you request a consultation, subscribe to our newsletter, or contact us for services. This may include your name, email address, phone number, property address, and project details.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, communicate with you about your projects, send you technical notices and support messages, and respond to your comments and questions.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted partners who assist us in operating our website and conducting our business.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at privacy@avrohub.com or call <a href="tel:+15551234567" class="phone-link-hij234">+1 (555) 123-4567</a>.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-tuv456">
        <div class="modal-content-wxy789">
            <button class="modal-close-zab012" onclick="hideModal('terms')">×</button>
            <h2>Terms of Service</h2>
            <p><strong>Last updated:</strong> January 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using AvyroHub's services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
            
            <h3>Service Description</h3>
            <p>AvyroHub provides exterior design services including but not limited to landscape architecture, facade design, outdoor living spaces, and sustainable design solutions. All services are subject to availability and our professional assessment.</p>
            
            <h3>Client Responsibilities</h3>
            <p>Clients are responsible for providing accurate information about their property, obtaining necessary permits, and ensuring site accessibility for our team. Clients must also comply with local building codes and regulations.</p>
            
            <h3>Payment Terms</h3>
            <p>Payment terms will be specified in individual project contracts. Generally, we require a deposit to begin work, with progress payments due at specified milestones. Final payment is due upon project completion.</p>
            
            <h3>Limitation of Liability</h3>
            <p>AvyroHub's liability is limited to the amount paid for services. We are not responsible for delays due to weather, permit issues, or other factors beyond our control.</p>
            
            <h3>Modifications</h3>
            <p>We reserve the right to modify these terms at any time. Continued use of our services after changes constitutes acceptance of the new terms.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at legal@avrohub.com or <a href="tel:+15551234567" class="phone-link-hij234">+1 (555) 123-4567</a>.</p>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Modal functions
        function showModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function hideModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.addEventListener('click', function(e) {
            if (e.target.classList.contains('modal-overlay-tuv456')) {
                e.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav-container-xyz789');
            if (window.scrollY > 100) {
                nav.style.background = 'linear-gradient(135deg, rgba(44, 62, 80, 0.95), rgba(52, 73, 94, 0.95))';
                nav.style.backdropFilter = 'blur(10px)';
            } else {
                nav.style.background = 'linear-gradient(135deg, #2c3e50, #34495e)';
                nav.style.backdropFilter = 'none';
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.service-card-hij456, .review-card-rst012, .timeline-item-fgh890, .expertise-card-lmn234').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Add loading animation to gallery images
        document.querySelectorAll('.gallery-item-stu789 img').forEach(img => {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
            });
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.3s ease';
        });

        // Form validation and interaction
        document.addEventListener('DOMContentLoaded', function() {
            // Add click tracking for continue buttons
            document.querySelectorAll('.continue-link-cde345').forEach(button => {
                button.addEventListener('click', function(e) {
                    // Add any tracking or analytics code here
                    console.log('Continue button clicked:', this.textContent);
                });
            });

            // Add hover effects to cards
            document.querySelectorAll('.service-card-hij456, .review-card-rst012').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });

        // Add dynamic year to footer
        document.addEventListener('DOMContentLoaded', function() {
            const currentYear = new Date().getFullYear();
            const footerText = document.querySelector('.footer-bottom-klm567 p');
            if (footerText) {
                footerText.innerHTML = footerText.innerHTML.replace('2024', currentYear);
            }
        });

        // Performance optimization
        if ('loading' in HTMLImageElement.prototype) {
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(img => {
                img.src = img.dataset.src;
            });
        }
    </script>
</body>
</html>

