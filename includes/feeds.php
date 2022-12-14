<div class="col-12 col-lg-6 pb-5">
  <div class="d-flex flex-column justify-content-center w-100 mx-auto" style="padding-top: 56px; max-width: 680px">
    <!-- create post -->
    <div class="bg-white p-3 mt-3 rounded border shadow">
      <!-- avatar -->
      <div class="d-flex" type="button">
        <div class="p-1">
          <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
        </div>
        <input type="text" class="form-control rounded-pill border-0 bg-gray pointer" disabled placeholder="What's on your mind..." data-bs-toggle="modal" data-bs-target="#createModal" />
      </div>
      <!-- create modal -->
      <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true" data-bs-backdrop="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- head -->
            <div class="modal-header align-items-center">
              <h5 class="text-dark text-center w-100 m-0" id="exampleModalLabel">
                Create Post
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- body -->
            <div class="modal-body">
              <div class="my-1 p-1">
                <div class="d-flex flex-column">
                  <!-- name -->
                  <div class="d-flex align-items-center">
                    <div class="p-2">
                      <img src="https://source.unsplash.com/collection/happy-people" alt="from fb" class="rounded-circle" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                    </div>
                    <div>

                      <p class="m-0 fw-bold">John</p>

                    </div>
                  </div>
                  <!-- text -->
                  <div>
                    <textarea cols="30" rows="5" class="form-control border-0"></textarea>
                  </div>

                  <!-- options -->
                  <div class="
                              d-flex
                              justify-content-between
                              border border-1 border-light
                              rounded
                              p-3
                              mt-3
                            ">
                    <p class="m-0">Add to your post</p>
                    <div>
                      <input type="file" id="actual-btn" hidden />
                      <label for="actual-btn">
                        <i class="
                                  fas
                                  fa-images
                                  fs-5
                                  text-success
                                  pointer
                                  mx-1
                                "></i>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- end -->
            </div>
            <!-- footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-primary w-100">
                Post
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- posts -->
    <!-- p 1 -->
    <div class="bg-white p-4 rounded shadow mt-3">
      <!-- author -->
      <div class="d-flex justify-content-between">
        <!-- avatar -->
        <div class="d-flex">
          <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
          <div>
            <p class="m-0 fw-bold">John</p>
            <span class="text-muted fs-7">July 17 at 1:23 pm</span>
          </div>
        </div>

      </div>
      <!-- post content -->
      <div class="mt-3">
        <!-- content -->
        <div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quae fuga incidunt consequatur tenetur doloremque officia
            corrupti provident tempore vitae labore?
          </p>
          <img src="https://source.unsplash.com/random/12" alt="post image" class="img-fluid rounded" />
        </div>
        <!-- comments -->
        <div class="post__comment mt-3 position-relative">

          <!-- comments start-->
          <div class="accordion" id="accordionExample">
            <div class="accordion-item border-0">
              <!-- comment collapse -->
              <h2 class="accordion-header" id="headingTwo">
                <div class="
                            accordion-button
                            collapsed
                            pointer
                            d-flex
                            justify-content-end
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false" aria-controls="collapsePost1">
                  <p class="m-0">2 Comments</p>
                </div>
              </h2>
              <hr />
              <!-- comment -->
              <div class="d-flex justify-content-around">

                <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false" aria-controls="collapsePost1">
                  <i class="fas fa-comment-alt me-3"></i>
                  <p class="m-0">Comment</p>
                </div>
              </div>
              <!-- comment expand -->
              <div id="collapsePost1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <hr />
                <div class="accordion-body">
                  <!-- comment 1 -->
                  <div class="d-flex align-items-center my-1">
                    <!-- avatar -->
                    <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                    <!-- comment text -->
                    <div class="p-3 rounded comment__input w-100">
                      <!-- comment menu of author -->
                      <div class="d-flex justify-content-end">

                      </div>
                      <p class="fw-bold m-0">John</p>
                      <p class="m-0 fs-7 bg-gray p-2 rounded">
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                      </p>
                    </div>
                  </div>
                  <!-- comment 2 -->
                  <div class="d-flex align-items-center my-1">
                    <!-- avatar -->
                    <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                    <!-- comment text -->
                    <div class="p-3 rounded comment__input w-100">
                      <p class="fw-bold m-0">Jerry</p>
                      <p class="m-0 fs-7 bg-gray p-2 rounded">
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                      </p>
                    </div>
                  </div>
                  <!-- create comment -->
                  <form class="d-flex my-1">
                    <!-- avatar -->
                    <div>
                      <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                    </div>
                    <!-- input -->
                    <input type="text" class="form-control border-0 rounded-pill bg-gray" placeholder="Write a comment" />
                  </form>
                  <!-- end -->
                </div>
              </div>
            </div>
          </div>
          <!-- end -->
        </div>
      </div>
    </div>
    <!-- p 2 -->
    <div class="bg-white p-4 rounded shadow mt-3">
      <!-- author -->
      <div class="d-flex justify-content-between">
        <!-- avatar -->
        <div class="d-flex">
          <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
          <div>
            <p class="m-0 fw-bold">Mike</p>
            <span class="text-muted fs-7">May 24 at 1:23 pm</span>
          </div>
        </div>
      </div>
      <!-- post content -->
      <div class="mt-3">
        <!-- content -->
        <div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quae fuga incidunt consequatur tenetur doloremque officia
            corrupti provident tempore vitae labore?
          </p>
          <img src="https://source.unsplash.com/random/13" alt="post image" class="img-fluid rounded" />
        </div>
        <!--  comments -->
        <div class="post__comment mt-3 position-relative">

          <!-- comments start-->
          <div class="accordion" id="accordionExample">
            <div class="accordion-item border-0">
              <!-- comment collapse -->
              <h2 class="accordion-header" id="headingTwo">
                <div class="
                            accordion-button
                            collapsed
                            pointer
                            d-flex
                            justify-content-end
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false" aria-controls="collapsePost1">
                  <p class="m-0">2 Comments</p>
                </div>
              </h2>
              <hr />
              <!-- comment -->
              <div class="d-flex justify-content-around">

                <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false" aria-controls="collapsePost1">
                  <i class="fas fa-comment-alt me-3"></i>
                  <p class="m-0">Comment</p>
                </div>
              </div>
              <!-- comment expand -->
              <div id="collapsePost1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <hr />
                <div class="accordion-body">
                  <!-- comment 1 -->
                  <div class="d-flex align-items-center my-1">
                    <!-- avatar -->
                    <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                    <!-- comment text -->
                    <div class="p-3 rounded comment__input w-100">
                      <!-- comment menu of author -->

                      <p class="fw-bold m-0">John</p>
                      <p class="m-0 fs-7 bg-gray p-2 rounded">
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                      </p>
                    </div>
                  </div>
                  <!-- comment 2 -->
                  <div class="d-flex align-items-center my-1">
                    <!-- avatar -->
                    <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                    <!-- comment text -->
                    <div class="p-3 rounded comment__input w-100">
                      <p class="fw-bold m-0">Jerry</p>
                      <p class="m-0 fs-7 bg-gray p-2 rounded">
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                      </p>
                    </div>
                  </div>
                  <!-- create comment -->
                  <form class="d-flex my-1">
                    <!-- avatar -->
                    <div>
                      <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                    </div>
                    <!-- input -->
                    <input type="text" class="form-control border-0 rounded-pill bg-gray" placeholder="Write a comment" />
                  </form>
                  <!-- end -->
                </div>
              </div>
            </div>
          </div>
          <!-- end -->
        </div>
      </div>
    </div>
  </div>
</div>