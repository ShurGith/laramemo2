<section class="max-w-3/5 m-auto">
  <form class="px-32 py-10 border-1 border-gray-50/20">
    <div class="space-y-12">
      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base/7 font-semibold text-white">Profile</h2>
        <p class="mt-1 text-sm/6 text-gray-400">This information will be displayed publicly so be careful what you
          share.</p>
        
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="username" class="block text-sm/6 font-medium text-white">Username</label>
            <div class="mt-2">
              <div
                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">workcation.com/</div>
                <input type="text" name="username" id="username"
                       class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                       placeholder="janesmith">
              </div>
            </div>
          </div>
          
          <div class="col-span-full">
            <label for="about" class="block text-sm/6 font-medium text-white">About</label>
            <div class="mt-2">
            <textarea name="about" id="about" rows="3"
                      class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Write a few sentences about yourself.</p>
          </div>
          
          <div class="col-span-full">
            <label for="photo" class="block text-sm/6 font-medium text-white">Photo</label>
            <div class="mt-2 flex items-center gap-x-3">
              <svg class="size-12 text-gray-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                   data-slot="icon">
                <path fill-rule="evenodd"
                      d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                      clip-rule="evenodd"/>
              </svg>
              <button type="button"
                      class="rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-white/20">
                Change
              </button>
            </div>
          </div>
          
          <div class="col-span-full">
            <label for="cover-photo" class="block text-sm/6 font-medium text-white">Cover photo</label>
            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-white/25 px-6 py-10">
              <div class="text-center">
                <svg class="mx-auto size-12 text-gray-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                     data-slot="icon">
                  <path fill-rule="evenodd"
                        d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                        clip-rule="evenodd"/>
                </svg>
                <div class="mt-4 flex text-sm/6 text-gray-400">
                  <label for="file-upload"
                         class="relative cursor-pointer rounded-md bg-gray-900 font-semibold text-white focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:ring-offset-gray-900 focus-within:outline-hidden hover:text-indigo-500">
                    <span>Upload a file</span>
                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                  </label>
                  <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs/5 text-gray-400">PNG, JPG, GIF up to 10MB</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base/7 font-semibold text-white">Personal Information</h2>
        <p class="mt-1 text-sm/6 text-gray-400">Use a permanent address where you can receive mail.</p>
        
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="first-name" class="block text-sm/6 font-medium text-white">First name</label>
            <div class="mt-2">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                     class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
            </div>
          </div>
          
          <div class="sm:col-span-3">
            <label for="last-name" class="block text-sm/6 font-medium text-white">Last name</label>
            <div class="mt-2">
              <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                     class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
            </div>
          </div>
          
          <div class="sm:col-span-4">
            <label for="email" class="block text-sm/6 font-medium text-white">Email address</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email"
                     class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
            </div>
          </div>
          
          <div class="sm:col-span-3">
            <label for="country" class="block text-sm/6 font-medium text-white">Country</label>
            <div class="mt-2 grid grid-cols-1">
              <select id="country" name="country" autocomplete="country-name"
                      class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white/5 py-1.5 pr-8 pl-3 text-base text-white outline-1 -outline-offset-1 outline-white/10 *:bg-gray-800 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
                <option>United States</option>
                <option>Canada</option>
                <option>Mexico</option>
              </select>
              <svg
                class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4"
                viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd"
                      d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                      clip-rule="evenodd"/>
              </svg>
            </div>
          </div>
          
          <div class="col-span-full">
            <label for="street-address" class="block text-sm/6 font-medium text-white">Street address</label>
            <div class="mt-2">
              <input type="text" name="street-address" id="street-address" autocomplete="street-address"
                     class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
            </div>
          </div>
          
          <div class="sm:col-span-2 sm:col-start-1">
            <label for="city" class="block text-sm/6 font-medium text-white">City</label>
            <div class="mt-2">
              <input type="text" name="city" id="city" autocomplete="address-level2"
                     class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
            </div>
          </div>
          
          <div class="sm:col-span-2">
            <label for="region" class="block text-sm/6 font-medium text-white">State / Province</label>
            <div class="mt-2">
              <input type="text" name="region" id="region" autocomplete="address-level1"
                     class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
            </div>
          </div>
          
          <div class="sm:col-span-2">
            <label for="postal-code" class="block text-sm/6 font-medium text-white">ZIP / Postal code</label>
            <div class="mt-2">
              <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                     class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
            </div>
          </div>
        </div>
      </div>
      
      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base/7 font-semibold text-white">Notifications</h2>
        <p class="mt-1 text-sm/6 text-gray-400">We'll always let you know about important changes, but you pick what
          else
          you want to hear about.</p>
        
        <div class="mt-10 space-y-10">
          <fieldset>
            <legend class="text-sm/6 font-semibold text-white">By email</legend>
            <div class="mt-6 space-y-6">
              <div class="flex gap-3">
                <div class="flex h-6 shrink-0 items-center">
                  <div class="group grid size-4 grid-cols-1">
                    <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" checked
                           class="col-start-1 row-start-1 appearance-none rounded-sm border border-white/10 bg-white/5 checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-white/10 disabled:bg-transparent forced-colors:appearance-auto">
                    <svg
                      class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-white/25"
                      viewBox="0 0 14 14" fill="none">
                      <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"/>
                      <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                </div>
                <div class="text-sm/6">
                  <label for="comments" class="font-medium text-white">Comments</label>
                  <p id="comments-description" class="text-gray-400">Get notified when someones posts a comment on a
                    posting.</p>
                </div>
              </div>
              <div class="flex gap-3">
                <div class="flex h-6 shrink-0 items-center">
                  <div class="group grid size-4 grid-cols-1">
                    <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox"
                           class="col-start-1 row-start-1 appearance-none rounded-sm border border-white/10 bg-white/5 checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-white/10 disabled:bg-transparent forced-colors:appearance-auto">
                    <svg
                      class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-white/25"
                      viewBox="0 0 14 14" fill="none">
                      <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"/>
                      <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                </div>
                <div class="text-sm/6">
                  <label for="candidates" class="font-medium text-white">Candidates</label>
                  <p id="candidates-description" class="text-gray-400">Get notified when a candidate applies for a
                    job.</p>
                </div>
              </div>
              <div class="flex gap-3">
                <div class="flex h-6 shrink-0 items-center">
                  <div class="group grid size-4 grid-cols-1">
                    <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox"
                           class="col-start-1 row-start-1 appearance-none rounded-sm border border-white/10 bg-white/5 checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-white/10 disabled:bg-transparent forced-colors:appearance-auto">
                    <svg
                      class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-white/25"
                      viewBox="0 0 14 14" fill="none">
                      <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"/>
                      <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                </div>
                <div class="text-sm/6">
                  <label for="offers" class="font-medium text-white">Offers</label>
                  <p id="offers-description" class="text-gray-400">Get notified when a candidate accepts or rejects an
                    offer.</p>
                </div>
              </div>
            </div>
          </fieldset>
          
          <fieldset>
            <legend class="text-sm/6 font-semibold text-white">Push notifications</legend>
            <p class="mt-1 text-sm/6 text-gray-400">These are delivered via SMS to your mobile phone.</p>
            <div class="mt-6 space-y-6">
              <div class="flex items-center gap-x-3">
                <input id="push-everything" name="push-notifications" type="radio" checked
                       class="relative size-4 appearance-none rounded-full border border-white/10 bg-white/5 before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-white/10 disabled:bg-transparent disabled:before:bg-white/25 forced-colors:appearance-auto forced-colors:before:hidden">
                <label for="push-everything" class="block text-sm/6 font-medium text-white">Everything</label>
              </div>
              <div class="flex items-center gap-x-3">
                <input id="push-email" name="push-notifications" type="radio"
                       class="relative size-4 appearance-none rounded-full border border-white/10 bg-white/5 before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-white/10 disabled:bg-transparent disabled:before:bg-white/25 forced-colors:appearance-auto forced-colors:before:hidden">
                <label for="push-email" class="block text-sm/6 font-medium text-white">Same as email</label>
              </div>
              <div class="flex items-center gap-x-3">
                <input id="push-nothing" name="push-notifications" type="radio"
                       class="relative size-4 appearance-none rounded-full border border-white/10 bg-white/5 before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-white/10 disabled:bg-transparent disabled:before:bg-white/25 forced-colors:appearance-auto forced-colors:before:hidden">
                <label for="push-nothing" class="block text-sm/6 font-medium text-white">No push notifications</label>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
    </div>
    
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
      <button type="submit"
              class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
        Save
      </button>
    </div>
  </form>
</section>