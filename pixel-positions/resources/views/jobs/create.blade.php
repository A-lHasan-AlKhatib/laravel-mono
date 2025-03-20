<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title"  name="title" placeholder="Web Developer..."/>
        <x-forms.input label="Salary"  name="salary" placeholder="55,000$"/>
        <x-forms.input label="Location"  name="location" placeholder="Remote"/>
        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>
        <x-forms.input label="URL"  name="url" type="url" placeholder="https:://site.com/jobs/job-id"/>
        <x-forms.checkbox label="Featured (Costs extra)" name="featured" />

        <x-forms.divider/>

        <x-forms.input label="Tags (comma seperated)"  name="tags" placeholder="PHP,backend,testing"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
