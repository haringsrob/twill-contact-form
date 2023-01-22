<div>
  @if($success)
    {!! $successMessage !!}
  @else
    <form wire:submit.prevent="save">
      <label for="email">Email
        <span class="required">*</span>
      </label>
      <input type="email" wire:model.defer="email" aria-required="true" size="30" value="" name="email" id="email"
             placeholder="Email Address">
      @error('email') <span class="error">{{ $message }}</span> @enderror
      <br/>
      <label for="subject">Subject
        <span class="required">*</span>
      </label>
      <input type="text" wire:model.defer="subject" aria-required="true" size="30" value="" name="subject"
             id="subject"
             placeholder="Subject">
      @error('subject') <span class="error">{{ $message }}</span> @enderror
      <br/>
      <label for="phone">Phone
        <span class="required">*</span>
      </label>
      <input type="text" wire:model.defer="phone" aria-required="true" size="30" value="" name="phone" id="phone"
             placeholder="Phone">
      @error('phone') <span class="error">{{ $message }}</span> @enderror
      <br/>
      <label for="message">Message
        <span class="required">*</span>
      </label>
      <textarea aria-required="true" rows="1" cols="45" name="message" id="message"
                wire:model.defer="content"
                placeholder="Message"></textarea>
      @error('content') <span class="error">{{ $message }}</span> @enderror
      <br/>
      <button type="submit">
        Send message
      </button>
    </form>
  @endif
</div>
