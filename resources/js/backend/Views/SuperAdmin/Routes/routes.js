//app layout
import Layout from "../Layouts/Layout.vue";
//Dashboard
import Dashboard from "../Management/Dashboard/Dashboard.vue";
//SettingsRoutes
import SettingsRoutes from "../Management/Settings/setup/routes.js";
//UserRoutes
import UserRoutes from "../Management/UserManagement/User/setup/routes.js";
//routes
import SentenceRuleRoutes from "../../../GlobalManagement/SentenceManagement/SentenceRule/setup/routes.js";
import SentenceRoutes from "../../../GlobalManagement/SentenceManagement/Sentence/setup/routes.js";
import SentenceGroupRoutes from "../../../GlobalManagement/SentenceManagement/SentenceGroup/setup/routes.js";
import VocabolaryStoryRoutes from "../../../GlobalManagement/VocabularyManagement/VocabolaryStory/setup/routes.js";
import VocabolaryStoryGroupRoutes from "../../../GlobalManagement/VocabularyManagement/VocabolaryStoryGroup/setup/routes.js";
import GalleryRoutes from "../../../GlobalManagement/GalleryManagement/Gallery/setup/routes.js";
import GalleryCategoryRoutes from "../../../GlobalManagement/GalleryManagement/GalleryCategory/setup/routes.js";
import BlogTagRoutes from "../../../GlobalManagement/BlogManagement/BlogTag/setup/routes.js";
import BlogWriterRoutes from "../../../GlobalManagement/BlogManagement/BlogWriter/setup/routes.js";
import BlogRoutes from "../../../GlobalManagement/BlogManagement/Blog/setup/routes.js";
import BlogCategoryRoutes from "../../../GlobalManagement/BlogManagement/BlogCategory/setup/routes.js";
import QuizSubmissionResultRoutes from "../../../GlobalManagement/QuizManagement/QuizSubmissionResult/setup/routes.js";
import QuizRoutes from "../../../GlobalManagement/QuizManagement/Quiz/setup/routes.js";
import QuizQuestionRoutes from "../../../GlobalManagement/QuizManagement/QuizQuestion/setup/routes.js";
import QuizQuestionTopicRoutes from "../../../GlobalManagement/QuizManagement/QuizQuestionTopic/setup/routes.js";
import VocabularySentenceRoutes from "../../../GlobalManagement/VocabularyManagement/VocabularySentence/setup/routes.js";
import VocabularyRoutes from "../../../GlobalManagement/VocabularyManagement/Vocabulary/setup/routes.js";

const routes = {
  path: "",
  component: Layout,
  children: [
    {
      path: "dashboard",
      component: Dashboard,
      name: "adminDashboard",
    },
    //management routes
    SentenceRuleRoutes,
    SentenceRoutes,
    SentenceGroupRoutes,
    VocabularyRoutes,
    VocabolaryStoryRoutes,
    VocabolaryStoryGroupRoutes,
    GalleryRoutes,
    GalleryCategoryRoutes,
    BlogTagRoutes,
    BlogWriterRoutes,
    BlogRoutes,
    BlogCategoryRoutes,
    QuizSubmissionResultRoutes,
    QuizRoutes,
    QuizQuestionRoutes,
    QuizQuestionTopicRoutes,
    VocabularySentenceRoutes,

    //user routes
    UserRoutes,
    //settings
    SettingsRoutes,
  ],
};

export default routes;
