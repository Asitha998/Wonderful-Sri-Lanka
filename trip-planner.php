<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Plan Your Trip - Wonderful Sri Lanka</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .trip-planner-form-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .selection-card {
            cursor: move;
        }

        .selection-card.dragging {
            opacity: 0.5;
            background-color: #f8f9fa;
        }

        .summary-card {
            border-left: 5px solid var(--bs-primary);
            transition: all 0.3s;
        }

        .summary-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .icon-container {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .drag-handle {
            cursor: grab;
        }

        .trip-buttons .btn {
            width: 100%;
        }

        .trip-buttons .btn+.btn {
            margin-top: 10px;
        }

        .destination-card-header {
            background-color: var(--bs-primary);
            color: white;
        }

        @media (min-width: 768px) {
            .trip-buttons .btn+.btn {
                margin-top: 0;
            }
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php include 'components/topbar.php'; ?>

    <div class="container-fluid position-relative p-0">
        <?php include 'components/header.php'; ?>
    </div>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Trip Planner</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Trip Planner</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Trip Planner Start -->
    <div class="container-fluid booking py-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Trip Summary Section (Left Column) -->
                <div class="col-lg-8">
                    <h2 class="mb-4">Your Wonderful Sri Lanka Trip</h2>
                    <p class="text-muted mb-4">Drag and drop destinations to reorder your trip. Set the number of days for each stop and add notes.</p>

                    <div class="trip-planner-form-container p-5">
                        <form id="tripPlannerForm">
                            <!-- User Details -->
                            <h4 class="mb-3 text-success">Your Details</h4>
                            <div class="row g-3 mb-5">
                                <div class="col-md-6">
                                    <label for="userName" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="userName" placeholder="John Doe">
                                </div>
                                <div class="col-md-6">
                                    <label for="userEmail" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" id="userEmail" placeholder="name@example.com">
                                </div>
                                <div class="col-12">
                                    <label for="tripStartDate" class="form-label">Trip Start Date</label>
                                    <input type="date" class="form-control" id="tripStartDate">
                                </div>
                            </div>

                            <!-- Tour Guide Section -->
                            <h4 class="mb-3 text-success">Tour Guide</h4>
                            <div id="guide-card-container" class="mb-5">
                                <!-- Guide card will be rendered here -->
                                <div class="text-muted" id="no-guide-message">
                                    No guide selected. You can select one from the <a href="destination.php">destination page</a>.
                                </div>
                            </div>

                            <!-- Vehicle Section -->
                            <h4 class="mb-3 text-success">Vehicle</h4>
                            <div id="vehicle-card-container" class="mb-5">
                                <!-- Vehicle card will be rendered here -->
                                <div class="text-muted" id="no-vehicle-message">
                                    No vehicle selected. You can select one from the <a href="destination.php">destination page</a>.
                                </div>
                            </div>

                            <!-- Destinations Section -->
                            <div class="mb-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="mb-0 text-success">Destinations</h4>
                                    <a href="destination.php" class="btn btn-success rounded-pill px-4 py-2">
                                        <i class="fa fa-plus me-2"></i>Add Destinations
                                    </a>
                                </div>
                                <div id="destinations-list" class="list-group">
                                    <!-- Destination cards will be rendered here -->
                                    <div class="text-muted text-center p-5" id="no-destinations-message">
                                        Your trip itinerary is empty. Please add some destinations!
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Checkout and Actions Section (Right Column) -->
                <div class="col-lg-4">
                    <div class="bg-light p-4 rounded" style="border: 1px solid #ddd;">
                        <h4 class="mb-4 text-success">Trip Summary</h4>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="fw-bold">Service Subtotal:</span>
                            <span id="services-subtotal">LKR 0.00</span>
                        </div>
                        <hr class="my-3">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">Total Days:</h5>
                            <h5 class="fw-bold mb-0" id="total-days">0</h5>
                        </div>
                        <hr class="my-3">

                        <!-- Action Buttons -->
                        <div class="trip-buttons">
                            <form id="checkoutForm" action="checkout.php" method="POST">
                                <input type="hidden" name="tripData" id="tripDataInput">
                                <button type="submit" id="checkout-btn" class="btn btn-success py-3 w-100" disabled>
                                    Confirm & Continue to Checkout
                                </button>
                            </form>
                            <button id="save-pdf-btn" class="btn btn-secondary py-3 w-100 mt-2">
                                <i class="far fa-file-pdf me-2"></i>Save Trip as PDF
                            </button>
                            <button id="send-email-btn" class="btn btn-secondary py-3 w-100 mt-2">
                                <i class="fas fa-envelope me-2"></i>Send Trip to Email
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trip Planner End -->

    <!-- Accommodation Details Modal -->
    <div class="modal fade" id="accommodationModal" tabindex="-1" aria-labelledby="accommodationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="accommodationModalLabel">Hotel Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="accommodation-carousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" id="carousel-inner">
                                    <!-- Carousel items will be injected here -->
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#accommodation-carousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#accommodation-carousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="mt-3" id="accommodation-video-container">
                                <!-- Video will be injected here -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 id="accommodation-name" class="text-success"></h4>
                            <p id="accommodation-description"></p>
                            <div id="accommodation-features"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'components/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // =========================================================================
            //  Trip Planner Core Logic
            // =========================================================================
            let tripData = {
                destinations: [],
                services: {
                    guide: null,
                    vehicle: null
                },
                startDate: null,
                userDetails: {
                    name: '',
                    email: ''
                }
            };

            const destinationsList = document.getElementById('destinations-list');
            const noDestinationsMessage = document.getElementById('no-destinations-message');
            const tripStartDateInput = document.getElementById('tripStartDate');
            const userNameInput = document.getElementById('userName');
            const userEmailInput = document.getElementById('userEmail');
            const checkoutBtn = document.getElementById('checkout-btn');
            const guideContainer = document.getElementById('guide-card-container');
            const vehicleContainer = document.getElementById('vehicle-card-container');
            const servicesSubtotalEl = document.getElementById('services-subtotal');
            const totalDaysEl = document.getElementById('total-days');
            const tripDataInput = document.getElementById('tripDataInput');
            const savePdfBtn = document.getElementById('save-pdf-btn');
            const sendEmailBtn = document.getElementById('send-email-btn');

            /**
             * Loads trip data from localStorage or initializes a new trip.
             */
            function loadTrip() {
                const storedTrip = localStorage.getItem('tripPlannerData');
                if (storedTrip) {
                    tripData = JSON.parse(storedTrip);
                }

                // Set initial user details and start date
                userNameInput.value = tripData.userDetails.name || '';
                userEmailInput.value = tripData.userDetails.email || '';
                tripStartDateInput.value = tripData.startDate || '';

                renderTrip();
            }

            /**
             * Saves the current trip data to localStorage.
             */
            function saveTrip() {
                localStorage.setItem('tripPlannerData', JSON.stringify(tripData));
                updateTripSummary();
            }

            /**
             * Renders the entire trip planner UI based on the current tripData object.
             */
            function renderTrip() {
                renderDestinations();
                renderServices();
                updateTripSummary();
            }

            /**
             * Renders the list of destinations.
             */
            function renderDestinations() {
                destinationsList.innerHTML = '';
                if (tripData.destinations.length === 0) {
                    noDestinationsMessage.style.display = 'block';
                    return;
                } else {
                    noDestinationsMessage.style.display = 'none';
                }

                tripData.destinations.forEach((dest, index) => {
                    const destinationCard = createDestinationCard(dest, index);
                    destinationsList.appendChild(destinationCard);
                });

                // Re-attach drag-and-drop listeners
                attachDragAndDropListeners();
            }

            /**
             * Renders the selected services (guide and vehicle).
             */
            function renderServices() {
                const noGuideMessage = document.getElementById('no-guide-message');
                const noVehicleMessage = document.getElementById('no-vehicle-message');

                guideContainer.innerHTML = '';
                vehicleContainer.innerHTML = '';

                if (tripData.services.guide) {
                    noGuideMessage.style.display = 'none';
                    guideContainer.appendChild(createServiceCard('Guide', tripData.services.guide, 'user'));
                } else {
                    noGuideMessage.style.display = 'block';
                }

                if (tripData.services.vehicle) {
                    noVehicleMessage.style.display = 'none';
                    vehicleContainer.appendChild(createServiceCard('Vehicle', tripData.services.vehicle, 'car'));
                } else {
                    noVehicleMessage.style.display = 'block';
                }
            }

            /**
             * Creates a UI card for a selected service.
             * @param {string} type - The type of service (e.g., "Guide", "Vehicle").
             * @param {object} service - The service data.
             * @param {string} iconClass - The Font Awesome icon class.
             * @returns {HTMLElement} - The created card element.
             */
            function createServiceCard(type, service, iconClass) {
                const card = document.createElement('div');
                card.className = `d-flex align-items-center bg-white p-3 rounded shadow-sm mb-3`;
                card.innerHTML = `
                    <div class="icon-container bg-success text-white rounded-circle me-3">
                        <i class="fas fa-${iconClass} fa-lg"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-0">${type}: ${service.name}</h5>
                        <p class="mb-0 text-muted">${service.description}</p>
                    </div>
                    <div>
                        <span class="fw-bold text-success">LKR ${service.price.toFixed(2)}</span>
                    </div>
                    <button class="btn btn-sm btn-link text-danger remove-service-btn" data-type="${type.toLowerCase()}"><i class="fas fa-trash-alt"></i></button>
                `;
                return card;
            }

            /**
             * Creates a destination card for the UI.
             * @param {object} dest - The destination data.
             * @param {number} index - The index of the destination in the array.
             * @returns {HTMLElement} - The created card element.
             */
            function createDestinationCard(dest, index) {
                const destinationCard = document.createElement('div');
                destinationCard.className = `list-group-item d-flex align-items-start selection-card mb-3 p-3 rounded shadow-sm`;
                destinationCard.setAttribute('draggable', 'true');
                destinationCard.dataset.index = index;

                // Calculate date range if start date is set
                const dates = calculateDateRange(index);
                const dateText = dates ? `<span class="badge bg-secondary text-white">${dates.start} to ${dates.end}</span>` : '';

                destinationCard.innerHTML = `
                    <div class="drag-handle me-3 mt-1" style="flex-shrink: 0;">
                        <i class="fas fa-grip-vertical text-muted"></i>
                    </div>
                    <div class="me-3">
                        <div class="icon-container bg-success text-white rounded-circle">
                            <h4 class="mb-0">${index + 1}</h4>
                        </div>
                    </div>
                    <div class="flex-grow-1 me-3">
                        <h5 class="mb-1">${dest.name}</h5>
                        <p class="mb-1 text-muted">${dest.description}</p>
                        ${dateText}
                        <div class="d-flex align-items-center mt-2">
                            <label for="days-${dest.id}" class="me-2 text-muted" style="white-space: nowrap;">Days:</label>
                            <input type="number" id="days-${dest.id}" class="form-control form-control-sm" style="width: 70px;" value="${dest.days}" min="1">
                            <button class="btn btn-sm btn-outline-danger ms-auto remove-destination-btn" data-id="${dest.id}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        <div class="mt-2">
                            <label for="notes-${dest.id}" class="form-label text-muted">Notes:</label>
                            <textarea id="notes-${dest.id}" class="form-control form-control-sm" rows="2" placeholder="e.g., Hiking, museum tour...">
                                ${dest.notes || ''}
                            </textarea>
                        </div>
                        <!-- Accommodation suggestions (mock) -->
                        <div class="mt-3">
                            <p class="mb-1 fw-bold">Recommended Accommodations:</p>
                            <ul class="list-unstyled">
                                <li>
                                    Hotel A <button class="btn btn-link btn-sm p-0 show-details-btn" data-hotel-id="hotelA">Show details</button>
                                </li>
                                <li>
                                    Eco Lodge B <button class="btn btn-link btn-sm p-0 show-details-btn" data-hotel-id="hotelB">Show details</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                `;
                return destinationCard;
            }

            /**
             * Calculates the date range for a given destination index.
             * @param {number} index - The index of the destination.
             * @returns {object|null} - An object with start and end dates, or null.
             */
            function calculateDateRange(index) {
                if (!tripData.startDate) {
                    return null;
                }

                const startDate = new Date(tripData.startDate);
                let currentDay = new Date(startDate);

                // Add up days from previous destinations
                for (let i = 0; i < index; i++) {
                    currentDay.setDate(currentDay.getDate() + tripData.destinations[i].days);
                }

                const destinationStartDate = new Date(currentDay);
                const destinationEndDate = new Date(currentDay);
                destinationEndDate.setDate(destinationEndDate.getDate() + tripData.destinations[index].days - 1);

                return {
                    start: formatDate(destinationStartDate),
                    end: formatDate(destinationEndDate)
                };
            }

            /**
             * Formats a Date object to a readable string.
             * @param {Date} date - The date to format.
             * @returns {string} - The formatted date string.
             */
            function formatDate(date) {
                const options = {
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                };
                return date.toLocaleDateString('en-US', options);
            }

            /**
             * Updates the summary section (total days, service costs).
             */
            function updateTripSummary() {
                let totalDays = 0;
                tripData.destinations.forEach(dest => {
                    totalDays += parseInt(dest.days, 10);
                });
                totalDaysEl.textContent = totalDays;

                let servicesSubtotal = 0;
                if (tripData.services.guide) {
                    servicesSubtotal += tripData.services.guide.price;
                }
                if (tripData.services.vehicle) {
                    servicesSubtotal += tripData.services.vehicle.price;
                }
                servicesSubtotalEl.textContent = `LKR ${servicesSubtotal.toFixed(2)}`;

                // Enable/disable checkout button based on paid services
                const hasPaidServices = servicesSubtotal > 0;
                checkoutBtn.disabled = !hasPaidServices;

                // Update the hidden input for form submission
                tripDataInput.value = JSON.stringify(tripData);
            }

            /**
             * Attaches event listeners for drag and drop functionality.
             */
            function attachDragAndDropListeners() {
                const listItems = destinationsList.querySelectorAll('.selection-card');
                listItems.forEach(item => {
                    item.addEventListener('dragstart', handleDragStart);
                    item.addEventListener('dragenter', handleDragEnter);
                    item.addEventListener('dragover', handleDragOver);
                    item.addEventListener('dragleave', handleDragLeave);
                    item.addEventListener('drop', handleDrop);
                    item.addEventListener('dragend', handleDragEnd);
                });
            }

            // Drag and drop variables
            let dragSrcEl = null;

            function handleDragStart(e) {
                dragSrcEl = this;
                e.dataTransfer.effectAllowed = 'move';
                e.dataTransfer.setData('text/plain', this.dataset.index);
                this.classList.add('dragging');
            }

            function handleDragOver(e) {
                e.preventDefault(); // Necessary to allow drop
                e.dataTransfer.dropEffect = 'move';
                const draggingOverItem = this;
                if (draggingOverItem !== dragSrcEl && !draggingOverItem.classList.contains('dragging')) {
                    const bounding = draggingOverItem.getBoundingClientRect();
                    const offset = bounding.y + (bounding.height / 2);
                    if (e.clientY > offset) {
                        draggingOverItem.style.borderBottom = '2px solid var(--bs-primary)';
                        draggingOverItem.style.borderTop = '';
                    } else {
                        draggingOverItem.style.borderTop = '2px solid var(--bs-primary)';
                        draggingOverItem.style.borderBottom = '';
                    }
                }
            }

            function handleDragEnter(e) {
                this.classList.add('over');
            }

            function handleDragLeave(e) {
                this.classList.remove('over');
                this.style.borderTop = '';
                this.style.borderBottom = '';
            }

            function handleDrop(e) {
                e.stopPropagation();
                if (dragSrcEl !== this) {
                    const fromIndex = parseInt(dragSrcEl.dataset.index, 10);
                    let toIndex = parseInt(this.dataset.index, 10);

                    // Reorder the tripData array
                    const [draggedItem] = tripData.destinations.splice(fromIndex, 1);
                    tripData.destinations.splice(toIndex, 0, draggedItem);

                    saveTrip();
                    renderTrip();
                }
                this.style.borderTop = '';
                this.style.borderBottom = '';
                return false;
            }

            function handleDragEnd(e) {
                this.classList.remove('dragging');
                const listItems = destinationsList.querySelectorAll('.selection-card');
                listItems.forEach(item => {
                    item.classList.remove('over');
                    item.style.borderTop = '';
                    item.style.borderBottom = '';
                });
            }

            // Mock hotel data for the modal
            const mockAccommodations = {
                hotelA: {
                    name: 'Luxury Resort & Spa',
                    description: 'A stunning five-star resort with panoramic views, perfect for a relaxing getaway. Enjoy our world-class spa and infinity pool.',
                    images: [
                        'https://placehold.co/800x600/5cb85c/FFFFFF?text=Hotel+A+View',
                        'https://placehold.co/800x600/5cb85c/FFFFFF?text=Infinity+Pool',
                        'https://placehold.co/800x600/5cb85c/FFFFFF?text=Resort+Rooms'
                    ],
                    video: 'https://www.youtube.com/embed/dQw4w9WgXcQ' // Rickroll video
                },
                hotelB: {
                    name: 'Eco Lodge Ella',
                    description: 'Nestled in the heart of the mountains, this eco-friendly lodge offers a rustic charm with breathtaking views. A perfect base for hikers and nature lovers.',
                    images: [
                        'https://placehold.co/800x600/4CAF50/FFFFFF?text=Eco+Lodge+Exterior',
                        'https://placehold.co/800x600/4CAF50/FFFFFF?text=Mountain+View',
                        'https://placehold.co/800x600/4CAF50/FFFFFF?text=Chalet+Interior'
                    ],
                    video: 'https://www.youtube.com/embed/dQw4w9WgXcQ' // Rickroll video
                }
            };

            /**
             * Populates and shows the accommodation details modal.
             * @param {string} hotelId - The ID of the hotel to display.
             */
            function showAccommodationDetailsModal(hotelId) {
                const hotel = mockAccommodations[hotelId];
                if (!hotel) return;

                const modal = document.getElementById('accommodationModal');
                const nameEl = document.getElementById('accommodation-name');
                const descriptionEl = document.getElementById('accommodation-description');
                const carouselInner = document.getElementById('carousel-inner');
                const videoContainer = document.getElementById('accommodation-video-container');

                nameEl.textContent = hotel.name;
                descriptionEl.textContent = hotel.description;

                // Clear previous content
                carouselInner.innerHTML = '';
                videoContainer.innerHTML = '';

                // Add images to carousel
                hotel.images.forEach((imgSrc, index) => {
                    const activeClass = index === 0 ? ' active' : '';
                    const item = document.createElement('div');
                    item.className = `carousel-item${activeClass}`;
                    item.innerHTML = `<img src="${imgSrc}" class="d-block w-100" alt="Hotel Image ${index + 1}">`;
                    carouselInner.appendChild(item);
                });

                // Add video iframe
                if (hotel.video) {
                    videoContainer.innerHTML = `<iframe width="100%" height="315" src="${hotel.video}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
                }

                const accommodationModal = new bootstrap.Modal(modal);
                accommodationModal.show();
            }

            // =========================================================================
            //  Event Listeners
            // =========================================================================

            // Remove service button
            document.addEventListener('click', function(e) {
                if (e.target.closest('.remove-service-btn')) {
                    const btn = e.target.closest('.remove-service-btn');
                    const serviceType = btn.dataset.type;
                    if (serviceType === 'guide') {
                        tripData.services.guide = null;
                    } else if (serviceType === 'vehicle') {
                        tripData.services.vehicle = null;
                    }
                    saveTrip();
                    renderTrip();
                }
            });

            // Remove destination button
            document.addEventListener('click', function(e) {
                if (e.target.closest('.remove-destination-btn')) {
                    const btn = e.target.closest('.remove-destination-btn');
                    const destinationId = btn.dataset.id;
                    tripData.destinations = tripData.destinations.filter(d => d.id !== destinationId);
                    saveTrip();
                    renderTrip();
                }
            });

            // Days input change
            document.addEventListener('input', function(e) {
                if (e.target.matches('input[id^="days-"]')) {
                    const destinationId = e.target.id.replace('days-', '');
                    const days = parseInt(e.target.value, 10);
                    const destination = tripData.destinations.find(d => d.id === destinationId);
                    if (destination && days > 0) {
                        destination.days = days;
                        saveTrip();
                        renderTrip();
                    }
                }
            });

            // Notes textarea change
            document.addEventListener('input', function(e) {
                if (e.target.matches('textarea[id^="notes-"]')) {
                    const destinationId = e.target.id.replace('notes-', '');
                    const notes = e.target.value;
                    const destination = tripData.destinations.find(d => d.id === destinationId);
                    if (destination) {
                        destination.notes = notes;
                        saveTrip();
                    }
                }
            });

            // User details and trip start date changes
            userNameInput.addEventListener('input', () => {
                tripData.userDetails.name = userNameInput.value;
                saveTrip();
            });

            userEmailInput.addEventListener('input', () => {
                tripData.userDetails.email = userEmailInput.value;
                saveTrip();
            });

            tripStartDateInput.addEventListener('change', function(e) {
                tripData.startDate = e.target.value;
                saveTrip();
                renderTrip();
            });

            // Show accommodation details modal
            document.addEventListener('click', function(e) {
                if (e.target.matches('.show-details-btn')) {
                    const hotelId = e.target.dataset.hotelId;
                    showAccommodationDetailsModal(hotelId);
                }
            });

            // Checkout form submission
            document.getElementById('checkoutForm').addEventListener('submit', function(e) {
                // Client-side validation
                if (!tripData.destinations.length) {
                    alert('Please add at least one destination before proceeding.');
                    e.preventDefault();
                    return;
                }
                if (!tripData.startDate) {
                    alert('Please select a trip start date.');
                    e.preventDefault();
                    return;
                }
                if (!tripData.userDetails.name || !tripData.userDetails.email) {
                    alert('Please enter your name and email to proceed.');
                    e.preventDefault();
                    return;
                }

                // Form will submit naturally, passing tripData to checkout.php
            });

            // Save as PDF button click
            savePdfBtn.addEventListener('click', function() {
                // This would require a server-side script to generate the PDF.
                alert('This feature requires a server-side implementation. Trip data saved to local storage.');
            });

            // Send to Email button click
            sendEmailBtn.addEventListener('click', function() {
                // This requires a server-side script to send the email.
                alert('This feature requires a server-side implementation. Trip data saved to local storage.');
            });

            // =========================================================================
            //  Initialization and Mock Data for Testing
            // =========================================================================

            loadTrip();

            if (tripData.destinations.length === 0) {
                tripData.destinations = [{
                        id: '1',
                        name: 'Sigiriya',
                        description: 'The Lion Rock Fortress.',
                        days: 2,
                        notes: 'Climb early to avoid the heat.'
                    },
                    {
                        id: '2',
                        name: 'Ella',
                        description: 'Scenic train rides and hiking.',
                        days: 3,
                        notes: 'Visit Nine Arch Bridge and Little Adam\'s Peak.'
                    },
                    {
                        id: '3',
                        name: 'Galle Fort',
                        description: 'Historic colonial-era city.',
                        days: 2,
                        notes: 'Explore the fort walls and local shops.'
                    }
                ];
                tripData.services.guide = {
                    id: 'g1',
                    name: 'John Doe',
                    description: 'English-speaking guide with 10 years experience.',
                    price: 50000.00
                };
                tripData.services.vehicle = {
                    id: 'v1',
                    name: 'AC Van',
                    description: 'Comfortable air-conditioned van for 4-6 people.',
                    price: 80000.00
                };
                saveTrip();
                renderTrip();
            }

        });
    </script>
</body>

</html>