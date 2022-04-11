<div class="w-full bg-white rounded px-8 py-12 mt-4">
  @csrf

  <textarea name="body" id="body" rows="5" class="bg-gray-50 appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none my-2" placeholder="Comentário">{{ $comment->body ?? old('body') }}</textarea>
  <label for="visible">
    <input type="checkbox" name="visible" 
      @if (isset($comment) && $comment->visible)
        checked="checked"
      @endif
    >
    Visível?
  </label>
  
  <div class="flex justify-end">
    <button type="submit" class="shadow bg-indigo-500 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-8 rounded mt-4">
      Enviar
    </button>
  </div>
</div>