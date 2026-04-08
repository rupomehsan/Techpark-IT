
<!-- Back to top button -->
<button
  type="button"
  id="gotoTopBtn"
  class="border-0 gotoTop position-fixed rounded-2 py-1 text-center text-white transition"
  aria-label="Go to top"
  title="Back to top"
>
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="1.25"
    stroke-linecap="round"
    stroke-linejoin="round"
    class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-up"
  >
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M12 5l0 14" />
    <path d="M18 11l-6 -6" />
    <path d="M6 11l6 -6" />
  </svg>
</button>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered video-modal-dialog">
        <div class="modal-content border-0 bg-dark">
          <div class="modal-header border-0 pb-2">
            <button
              type="button"
              class="btn-close btn-close-white ms-auto"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body p-3 pt-0">
            <div class="ratio ratio-16x9">
              <iframe
                id="videoFrame"
                src=""
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                class="rounded-3"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- appointment modal open for all page  -->
    <div class="modal fade" id="appointment">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content radius_20">
          <div class="modal-header border-0 pb-0">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body">
            <div class="container p-0 rounded-4">
              <div class="row g-0">
                <div class="col-12">
                  <div class="p-4 p-lg-5">
                    <div class="text-center mb-4">
                      <h3 class="fw-bold mb-2">Get a Free Quote</h3>
                      <p class="text-muted mb-0">
                        Tell us about your project and we'll get back to you
                        within 24 hours
                      </p>
                    </div>

                    <form id="quoteForm" class="needs-validation" novalidate>
                      <div class="row g-3">
                        <!-- Name Field -->
                        <div class="col-md-6">
                          <label for="quoteName" class="form-label fw-500"
                            >Full Name <span class="text-danger">*</span></label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="quoteName"
                            name="full_name"
                            placeholder="John Doe"
                            required
                          />
                          <div class="invalid-feedback">
                            Please enter your name.
                          </div>
                        </div>

                        <!-- Email Field -->
                        <div class="col-md-6">
                          <label for="quoteEmail" class="form-label fw-500"
                            >Email Address
                            <span class="text-danger">*</span></label
                          >
                          <input
                            type="email"
                            class="form-control"
                            id="quoteEmail"
                            name="email"
                            placeholder="john@example.com"
                            required
                          />
                          <div class="invalid-feedback">
                            Please enter a valid email.
                          </div>
                        </div>

                        <!-- Phone Field -->
                        <div class="col-md-6">
                          <label for="quotePhone" class="form-label fw-500"
                            >Phone Number
                            <span class="text-danger">*</span></label
                          >
                          <input
                            type="tel"
                            class="form-control"
                            id="quotePhone"
                            name="phone"
                            placeholder="+880 123 456 7890"
                            required
                          />
                          <div class="invalid-feedback">
                            Please enter your phone number.
                          </div>
                        </div>

                        <!-- Company Field -->
                        <div class="col-md-6">
                          <label for="quoteCompany" class="form-label fw-500"
                            >Company Name</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="quoteCompany"
                            name="company_name"
                            placeholder="Your Company (Optional)"
                          />
                        </div>

                        <!-- Service Type -->
                        <div class="col-md-6">
                          <label for="quoteService" class="form-label fw-500"
                            >Service Required
                            <span class="text-danger">*</span></label
                          >
                          <select
                            class="form-select"
                            id="quoteService"
                            name="service_required"
                            required
                          >
                            <option value="" selected disabled>
                              Select a service
                            </option>
                              <option value="ecommerce">
                              E-Commerce Solution
                            </option>
                            <option value="web-development">
                             School Management Software
                            </option>
                    
                            <option value="custom-software">
                              Custom Software Development
                            </option>
                
                         
                            <option value="other">Other</option>
                          </select>
                          <div class="invalid-feedback">
                            Please select a service.
                          </div>
                        </div>

                        <!-- Budget Range -->
                        <div class="col-md-6">
                          <label for="quoteBudget" class="form-label fw-500"
                            >Budget Range</label
                          >
                          <select class="form-select" id="quoteBudget" name="budget_range">
                            <option value="" selected>
                              Select budget (Optional)
                            </option>
                            <option value="under-5k">Under 20,000 TK</option>
                            <option value="5k-10k">50,000 - 100,000 TK</option>
                            <option value="10k-25k">100,000 - 200,000 TK</option>
                            <option value="25k-50k">200,000 - 500,000 TK</option>
                            <option value="50k-plus">500,000+ TK</option>
                          </select>
                        </div>

                        <!-- Project Description -->
                        <div class="col-12">
                          <label for="quoteMessage" class="form-label fw-500"
                            >Project Description
                            <span class="text-danger">*</span></label
                          >
                          <textarea
                            class="form-control"
                            id="quoteMessage"
                            name="project_description"
                            rows="4"
                            placeholder="Tell us about your project requirements, goals, and timeline..."
                            required
                          ></textarea>
                          <div class="invalid-feedback">
                            Please describe your project.
                          </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12">
                          <button
                            type="submit"
                            class="btn btn-success w-100 py-3 fw-500"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="me-2"
                            >
                              <line x1="22" y1="2" x2="11" y2="13"></line>
                              <polygon
                                points="22 2 15 22 11 13 2 9 22 2"
                              ></polygon>
                            </svg>
                            Submit Quote Request
                          </button>
                        </div>

                        <!-- Info Text -->
                        <div class="col-12 text-center">
                          <p class="text-muted small mb-0">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="16"
                              height="16"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="me-1"
                            >
                              <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
                              ></path>
                            </svg>
                            We'll respond within 24 hours • Free consultation
                            included
                          </p>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- Quote Form Submission Script -->
    <script>
      $(document).ready(function() {
        // Form validation and submission
        $('#quoteForm').on('submit', function(e) {
          e.preventDefault();

          // Check form validity
          if (!this.checkValidity()) {
            e.stopPropagation();
            $(this).addClass('was-validated');
            return false;
          }

          // Collect form data and map to API field names
          const formData = {
            full_name: $('#quoteName').val(),
            email: $('#quoteEmail').val(),
            phone: $('#quotePhone').val(),
            company_name: $('#quoteCompany').val(),
            service_required: $('#quoteService').val(),
            budget_range: $('#quoteBudget').val(),
            project_description: $('#quoteMessage').val()
          };

          // Disable submit button to prevent double submission
          const $submitButton = $(this).find('button[type="submit"]');
          const originalButtonText = $submitButton.html();
          $submitButton.prop('disabled', true).html(
            '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Submitting...'
          );

          // Submit via API
          $.ajax({
            url: '{{ url("/api/v1/free-quotes/store") }}',
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(formData),
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
              'Accept': 'application/json'
            },
            success: function(response) {
              // Show success message
              alert('Thank you! Your quote request has been submitted successfully. We will contact you within 24 hours.');

              // Reset form
              $('#quoteForm')[0].reset();
              $('#quoteForm').removeClass('was-validated');

              // Close modal
              $('#quoteModal').modal('hide');

              // Re-enable button
              $submitButton.prop('disabled', false).html(originalButtonText);
            },
            error: function(xhr) {
              // Re-enable button
              $submitButton.prop('disabled', false).html(originalButtonText);

              // Handle validation errors
              if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
                let errorMessage = 'Please correct the following errors:\n';
                $.each(xhr.responseJSON.errors, function(field, messages) {
                  errorMessage += '\n- ' + messages.join(', ');
                });
                alert(errorMessage);
              } else {
                // Show generic error message
                alert('Sorry, there was an error submitting your request. Please try again or contact us directly.');
              }
            }
          });
        });
      });
    </script>
